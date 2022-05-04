<?php

namespace App\Controller;

use App\Entity\Locavecchauffeur;
use App\Entity\Modele;
use DateTime;
use DateTimeInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

class HomeController extends AbstractController
{

    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation(): Response
    {
        return $this->render('reservation/reservation.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion($request): Response
    {
        
        return $this->render('connexion/connexion.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(): Response
    {

        return $this->render('inscription/inscription.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/validation", name="validation")
     */
    public function validation(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/login", name="security_login")
     */
    public function login(): Response
    {
        return $this->render('home/reservation.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


}
