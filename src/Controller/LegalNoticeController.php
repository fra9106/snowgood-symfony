<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalNoticeController extends AbstractController
{
    /**
     * @Route("/legal/notice", name="legal_notice")
     */
    public function legalNotice(): Response
    {
        return $this->render('legal_notice/mentions-legales.html.twig', [
            'controller_name' => 'LegalNoticeController',
        ]);
    }
}
