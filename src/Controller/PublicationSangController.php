<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicationSangController extends AbstractController
{
    /**
     * @Route("/publication/sang", name="publication_sang")
     */
    public function index(): Response
    {
        return $this->render('publication_sang/index.html.twig', [
            'controller_name' => 'PublicationSangController',
        ]);
    }
}
