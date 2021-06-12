<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicationEscorteController extends AbstractController
{
    /**
     * @Route("/publication/escorte", name="publication_escorte")
     */
    public function index(): Response
    {
        return $this->render('publication_escorte/index.html.twig', [
            'controller_name' => 'PublicationEscorteController',
        ]);
    }
}
