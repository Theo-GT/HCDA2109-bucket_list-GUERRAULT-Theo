<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/legal-stuff", name="app_")
 */
class MainController extends AbstractController
{


    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/aboutus", name="aboutus")
     */
    public function aboutUs(): Response
    {
        return $this->render('main/about-us.html.twig');
    }



    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
