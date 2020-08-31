<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BuildingController extends AbstractController
{
    /**
     * @Route("/buildings", name="buildings")
     */
    public function index()
    {
        return $this->render('building/index.html.twig', [
            'controller_name' => 'BuildingController',
        ]);
    }
}
