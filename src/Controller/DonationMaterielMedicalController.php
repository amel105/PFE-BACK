<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;




class DonationMaterielMedicalController extends AbstractController
{
    /**
     * @Route("/donation/materiel/medical", name="donation_materiel_medical")
     */
    public function index(): Response
    {
        return $this->render('donation_materiel_medical/index.html.twig', [
            'controller_name' => 'DonationMaterielMedicalController',
        ]);
    }

    /**
     * @Route("/donationMd",name="donatemedical",methods={"post"})
     */
    public function donatemedical(Request $request )
    {
        $resultat = json_decode($request->getContent(),true);

        $em = $this->container->get('doctrine')->getManager();
        $donation = $em->getRepository(DonationMaterielMedical::class)->findOneBy(array('Email' => $resultat['Email']));

        if (!$donation){
        $donation = new DonationMaterielMedical();
        $donation->setFirstName($resultat['FirstName'])
             ->setEmail($resultat['Email'])
             ->setAdresse($resultat['Adresse'])
             ->setTypeMateriel($resultat['TypeMateriel'])
             ->setPhoneNumber($resultat['PhoneNumber'])
             ->setLastName($resultat['LastName']);
             //dd(LastName);
            if((int)$resultat['role'] == 1 ){
            $donation->setRole(DonationMaterielMedical::ROLE_BENEVOLE);
            }else{
                $donation->setRole(DonationMaterielMedical::ROLE_BENEFICEUR);

            }
        $em->persist($donation);
        $em->flush();

            $response = new Response();
            $response->setContent(json_encode(array(
                'result' => 'Donation réussite !',
            )));
            $response->setStatusCode(200    );
            $response->headers->set('Content-Type', 'application/json');
            return $response;

        }
        $response = new Response();
        $response->setContent(json_encode(array(
            'result' => '  Donation encore  existe !',
        )));
        $response->setStatusCode(400    );
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }









}
