<?php

namespace App\Controller;

use App\Repository\PlotRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PlotController extends AbstractController
{
    private const PAGE_LIMIT = 10;

    /**
     * @Route("/plots", name="plot_index")
     */
    public function getAll(PlotRepository $repository, PaginatorInterface $paginator, Request $request)
    {
        $pagination = $paginator->paginate(
            $repository->findAllWithJoin(),
            $request->query->getInt('page', 1),
            self::PAGE_LIMIT
        );

        return $this->render('plot/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route("/plots/{id}", name="plot_item")
     */
    public function getItem($id)
    {
        return $this->render('plot/item.html.twig', [
            'id' => $id
        ]);
    }
}
