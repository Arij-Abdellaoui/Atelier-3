<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        $title=' Products List';
        $productsArray = array(
            array( 'id'=>1, 'name'=>'Phone', 'price'=>1000),
            array( 'id'=>2, 'name'=>'tv', 'price'=>4000)
        );
        
        
        
        }


    }

