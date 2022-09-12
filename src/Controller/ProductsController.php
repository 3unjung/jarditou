<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/products', name: 'products_')]
class ProductsController extends AbstractController
{
    #[Route('/catalogue', name: 'catalogue_')]
    public function catalogue(): Response
    {

        return $this->render('products/index.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }

    #[Route('/{name}', name: 'details')]
    public function detailsUers(Users $user): Response
    {
        $sql = "SELECT * FROM users";

        dd($user);
        return $this->render('products/catalogue.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }
}
