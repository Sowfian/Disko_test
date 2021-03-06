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
use Knp\Component\Pager\PaginatorInterface;


class HomeController extends Controller
{
     /**
      * @Route("/")
      */
    public function index(PaginatorInterface $paginator, ProductRepository $productRepository, Request $request): Response
    {
        $product = $paginator->paginate(
            $productRepository->findByPrice(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('Home/home.html.twig', [
            'products' => $product
        ]);
    }
}