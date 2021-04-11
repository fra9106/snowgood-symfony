<?php

namespace App\Controller;

use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home(TrickRepository $repo): Response
    {
        return $this->render('home/home.html.twig', [
            'tricks' => $repo->findAllTricks()
            ]);
        
    }

    /**
     * @Route("mentionsLegales", name="mentions_legales")
     * @return Response
     */
    public function mentionsLegales(): Response 
    {
        return $this->render('shared/mentions-legales.html.twig');
    }
    
}
