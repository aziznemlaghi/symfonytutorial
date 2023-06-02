<?php

namespace App\Controller;

use Doctrine\ORM\Query\AST\Functions\AbsFunction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
    #[Route('/','home.index',methods:['GET'])]
    public function index() : Response 
    {
        return $this->render('home.html.twig');
    }
}


?>