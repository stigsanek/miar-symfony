<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlotController extends AbstractController
{
    /**
     * @Route("/plot", name="plot")
     */
    public function index()
    {
        return $this->render('plot/index.html.twig', [
            'controller_name' => 'PlotController',
        ]);
    }
}
