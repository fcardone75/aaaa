<?php

namespace App\EventSubscriber;

use App\Exception\FileUploadFailedException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\FlashBagAwareSessionInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class FileUploadExceptionSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => ['onFileUploadException', 0],
        ];
    }

    public function onFileUploadException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();

        if ($exception instanceof \RuntimeException) {
            $this->handleError($event, $exception->getMessage());
            return;
        }

        // risale la catena delle eccezioni: Doctrine wrappa l'eccezione originale
        $cause = $exception;
        while ($cause !== null) {
            if ($cause instanceof FileUploadFailedException) {
                break;
            }
            $cause = $cause->getPrevious();
        }

        if (!$cause instanceof FileUploadFailedException) {
            return;
        }

        $this->handleError($event, $cause->getMessage());
    }

    // Per le request AJAX risponde con JsonResponse, altrimenti redirect con flash
    private function handleError(ExceptionEvent $event, string $message): void
    {
        $request = $event->getRequest();

        if ($request->isXmlHttpRequest()) {
            $event->setResponse(new JsonResponse(
                json_encode(['messageErrors' => [$message]]),
                JsonResponse::HTTP_BAD_REQUEST
            ));
            return;
        }

        $session = $request->getSession();
        if ($session instanceof FlashBagAwareSessionInterface) {
            $session->getFlashBag()->add('danger', $message);
        }

        $referer = $request->headers->get('referer', '/');
        $event->setResponse(new RedirectResponse($referer));
    }
}
