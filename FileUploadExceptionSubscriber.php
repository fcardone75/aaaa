<?php

namespace App\EventSubscriber;

use App\Exception\FileUploadFailedException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
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
            $this->redirectWithFlash($event, $exception->getMessage());
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

        $this->redirectWithFlash($event, $cause->getMessage());
    }

    private function redirectWithFlash(ExceptionEvent $event, string $message): void
    {
        $request = $event->getRequest();
        $session = $request->getSession();

        if ($session instanceof FlashBagAwareSessionInterface) {
            $session->getFlashBag()->add('danger', $message);
        }

        $referer = $request->headers->get('referer', '/');
        $event->setResponse(new RedirectResponse($referer));
    }
}
