<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;





class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        $name = " Bassem";
        $users =[$name,"Rabaa","Amal","chaima"];
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            "name"=>$name,
            'utilisateurs' => $users
        ]);
    }


    /**
     * @Route("/cv",name="cv")
     */
    public function test()
    {
        echo "test";
        return new Response();
    }


    /**
     * @Route("/addfromangular",name="add",methods={"post"})
     */
    public function add(Request $request)
    {
    $resultat = json_decode($request->getContent(),true);
    
    $user = new User();
    $user->setFirstName($resultat['amal'])
        ->setPassword("dfn5454")
        ->setEmail("amal@gmail.com")
        ->setPhoneNumber('25609125');
        
        //->setLastName($resultat['khelil']);
        
   $em = $this->container->get('doctrine')->getManager();
        $em->persist($user);
        $em->flush();
       $response = new Response();
       $response->setStatusCode('200');
       return $response;

    }



    /**
     * @Route("/updateUser",name="update",methods={"post"})
     */
    public function updateUser(Request $request)
    {
        $resultat = json_decode($request->getContent(),true);
          dd($resultat);
        $em = $this->container->get('doctrine')->getManager();
        $user = $em->getRepository(User::class)->findOneBy(array('Email' => $resultat['Email']));

        if ($user){
            $user->setFirstName('Cristiano');
            $em->persist($user);
            $em->flush();

        }

        $response = new Response();
        $response->setStatusCode('200');
        return $response;

    }



    /**
     * @Route("/inscription",name="register",methods={"post"})
     */
    public function register(Request $request , UserPasswordEncoderInterface $encoder)
    {
        $resultat = json_decode($request->getContent(),true);

        $em = $this->container->get('doctrine')->getManager();
        $user = $em->getRepository(User::class)->findOneBy(array('Email' => $resultat['Email']));

        if (!$user){
        $user = new User();
        $user->setFirstName($resultat['FirstName'])
             ->setPassword($encoder->encodePassword($user,$resultat['Password']) ) 
             ->setEmail($resultat['Email'])
             ->setPhoneNumber($resultat['PhoneNumber'])
             ->setLastName($resultat['LastName']);
             //dd(LastName);
            if((int)$resultat['role'] == 1 ){
            $user->setRole(User::ROLE_BENEVOLE);
            }else{
                $user->setRole(User::ROLE_BENEFICEUR);

            }
        $em->persist($user);
        $em->flush();

            $response = new Response();
            $response->setContent(json_encode(array(
                'result' => 'Inscription réussite !',
            )));
            $response->setStatusCode(200    );
            $response->headers->set('Content-Type', 'application/json');
            return $response;

        //dd('user not found you can add new user');
        }
        $response = new Response();
        $response->setContent(json_encode(array(
            'result' => 'Utilisateur encore  existe !',
        )));
        $response->setStatusCode(400    );
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }

     /**
     * @Route("/editProfil",name="edit_profil",methods={"post"})
     */
    public function editProfile(Request $request){
        $result = json_decode($request->getContent(),true);
        $em = $this->container->get('doctrine')->getManager();
        $User = $em->getRepository(User::class)->findOneBy(array('id' => (int)$resultat['idUser']));
        if($user){
              //dd('here');
              // dd($result['email']);
            if($user->getEmail() == $resultat['Email']){
              // dd('here');
                $user->setFirstName($resultat['FirstName'])
                ->setLastName($resultat['LastName'])
                ->setPhoneNumber($resultat['PhoneNumber'])
                ->setDescription($resultat['description'])
                ->setCompany($resultat['company'])
                ->setTitre($resultat['titre'])
                ->setEmail($resultat['Email'])
                ->setRole($resultat['role']);


                $em->persist($user);
                $em->flush();
                  
                    $response = new Response();
                    $response->setContent(json_encode(array(
                        'result' => 'Inscritpion réussite !',
                    )));
                    $response->setStatusCode(200    );
                    $response->headers->set('Content-Type', 'application/json');
                    return  $response;
            }else{
               
                $us = $em->getRepository(User::class)->findOneBy(array('email' => $resultat['email']));
               //dd($us);
                if($us){
                    // if user exist
                    $response = new Response();
                    $response->setContent(json_encode(array(
                        'result' => 'Utilisateur existe déjà !',
                    )));
                    $response->setStatusCode(400    );
                    $response->headers->set('Content-Type', 'application/json');
                    return  $response;
            


                }else{
                    return new Response();

                    // user not exist
                    dd('user  nexiste pas !');
                }

            }
            //dd($user->getEmail());
            //$us = $em->getRepository(User::class)->findOneBy(array('id' => $result['email']));

        } 

        return new Response();
       // dd($user);

    }




    /**
     * @Route("/getuser",name="get_user",methods={"post"})
     */
    public function getu(Request $request){
        $resultat = json_decode($request->getContent(),true);
        $em = $this->container->get('doctrine')->getManager();
        $user = $em->getRepository(User::class)->findOneBy(array('Email' => $resultat['Email']));
        $serializer = $this->container->get('serializer');
        $user = $serializer->serialize($user, 'json');
        return new JsonResponse ( $user );
        
         //dd($user);
         //return new Response();
     }


    /**
     * @Route("/getusers",name="get_users",methods={"get"})
     */
    public function getAllUsers(){
        $em = $this->container->get('doctrine')->getManager();

        $us = $em->getRepository(User::class)->findUser();
        
        $serializer = $this->container->get('serializer');
         $itemSerializer = $serializer->serialize($us, 'json');
       // dd($itemSerializer);
         return new Response( $itemSerializer );
     // $response = new Response($itemSerializer );
       //  $response->setContent( $itemSerializer);
      //   $response->setStatusCode(200    );
     // $response->headers->set('Content-Type', 'application/json');
//  return $response;
       // return new Response();
    }

    

    
}
