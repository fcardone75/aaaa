<?php

namespace App\Controller\Admin;

use App\Entity\ApplicationAttachment;
use Doctrine\Persistence\ManagerRegistry;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Knp\Bundle\GaufretteBundle\FilesystemMap;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class ApplicationAttachmentCrudController extends AbstractCrudController
{
    /**
     * @var FilesystemMap
     */
    private $filesystemMap;

    public function __construct(
        FilesystemMap $filesystemMap
    ) {
        $this->filesystemMap = $filesystemMap;
    }

    public static function getEntityFqcn(): string
    {
        return ApplicationAttachment::class;
    }

    // NB IMPORTANT: $fileName is used to print filename in download link label(VichFileType), don't delete this param
    #[Route(path: 'application-attachment/{id}/download/{fileName}', methods: ['GET'])]
    public function download(
        ManagerRegistry $managerRegistry,
        Request $request,
        $id,
        $fileName
    ): Response
    {
        $em = $managerRegistry->getManager();
        $entity = $em->getRepository(ApplicationAttachment::class)->find($id);

        if (!$entity) {
            $this->addFlash('danger', 'Il file "' . $id . '" non è disponibile sullo storage.');
            $referer = $request->headers->get('referer', '/');
            return $this->redirect($referer);
        }

        $fs = $this->filesystemMap->get('application_attachment');

        try {
            $content = $fs->read($entity->getFileName());
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Il file "' . ($entity->getOriginalFileName() ?? $entity->getFileName()) . '" non è disponibile sullo storage.');
            $referer = $request->headers->get('referer', '/');
            return $this->redirect($referer);
        }


        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/octet-stream');
        $dispositionHeader = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $entity->getFileName());
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

}
