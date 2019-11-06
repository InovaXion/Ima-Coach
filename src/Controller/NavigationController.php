<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NavigationController extends AbstractController
{
    /**
     * @Route("/Àpropos", name="navigation")
     */
    public function Àpropos()
    {
        return $this->render('/index.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
    
}
