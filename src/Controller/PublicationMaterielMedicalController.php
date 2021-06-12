<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicationMaterielMedicalController extends AbstractController
{
    /**
     * @Route("/publication/materiel/medical", name="publication_materiel_medical")
     */
    public function index(): Response
    {
        return $this->render('publication_materiel_medical/index.html.twig', [
            'controller_name' => 'PublicationMaterielMedicalController',
        ]);
    }
}
