<?php

namespace App\Controller;

use App\Repository\PlotRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PlotController extends AbstractController
{
    /**
     * @Route("/plots", name="plot_index")
     */
    public function index(PlotRepository $repository, PaginatorInterface $paginator, Request $request)
    {
        $pagination = $paginator->paginate(
            $repository->findAllWithJoin(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('plot/index.html.twig', [
            'controller_name' => 'PlotController',
            //'pagination' => $pagination
        ]);
    }
}
