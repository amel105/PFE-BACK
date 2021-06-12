<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationMaterielMedicalController extends AbstractController
{
    /**
     * @Route("/reclamation/materiel/medical", name="reclamation_materiel_medical")
     */
    public function index(): Response
    {
        return $this->render('reclamation_materiel_medical/index.html.twig', [
            'controller_name' => 'ReclamationMaterielMedicalController',
        ]);
    }
}
