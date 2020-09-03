<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlotController extends AbstractController
{
    /**
     * @Route("/plots", name="plot_index")
     */
    public function index()
    {
        return $this->render('plot/index.html.twig', [
            'controller_name' => 'PlotController',
        ]);
    }
}
