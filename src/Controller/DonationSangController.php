<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DonationSangController extends AbstractController
{
    /**
     * @Route("/donation/sang", name="donation_sang")
     */
    public function index(): Response
    {
        return $this->render('donation_sang/index.html.twig', [
            'controller_name' => 'DonationSangController',
        ]);
    }
}
