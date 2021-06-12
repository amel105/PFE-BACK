<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DonationEscorteController extends AbstractController
{
    /**
     * @Route("/donation/escorte", name="donation_escorte")
     */
    public function index(): Response
    {
        return $this->render('donation_escorte/index.html.twig', [
            'controller_name' => 'DonationEscorteController',
        ]);
    }
}
