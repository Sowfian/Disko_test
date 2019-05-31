<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller
{
     /**
      * @Route("/")
      */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('Home/home.html.twig');
        //return $this->render('AppBundle:Home:home.html.twig',array('number' => $number));

    }
}