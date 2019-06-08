<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends Controller
{
     /**
      * @Route("/")
      */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('Home/home.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }
}