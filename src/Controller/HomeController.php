<?php

namespace App\Controller;

use App\Entity\Formuleavecchauffeur;
use App\Entity\Locavecchauffeur;
use App\Entity\Modele;
use DateTime;
use DateTimeInterface;
use Doctrine\DBAL\Types\StringType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Constraints\Date;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="reservation")
     */
    public function reservation(): Response
    {
        return $this->render('reservation/reservation.html.twig', [
            'controller_name' => 'HomeController'
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(): Response
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
        return $this->render('validation/validation.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/login", name="security_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $lastUsername = $authenticationUtils->getLastUsername();
        $errors = $authenticationUtils->getLastAuthenticationError();
        return $this->render('reservation/reservation.html.twig', ['lastUsername' => $lastUsername, 'errors' =>
        $errors]);
        // return $this->redirectToRoute('reservation',['lastUsername' => $lastUsername, 'errors' => $errors]);
    }



    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout()
    {
        return $this->render('connexion/connexion.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
