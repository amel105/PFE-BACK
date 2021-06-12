<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationEscortelController extends AbstractController
{
    /**
     * @Route("/reclamation/escortel", name="reclamation_escortel")
     */
    public function index(): Response
    {
        return $this->render('reclamation_escortel/index.html.twig', [
            'controller_name' => 'ReclamationEscortelController',
        ]);
    }
}
