<?php

namespace App\Controller;

use App\Service\Exporter;
use App\Repository\PlotRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/plots")
 */
class PlotController extends AbstractController
{
    /**
     * Default row limit
     */
    private const ROW_LIMIT = 10;

    /**
     * @Route("/", name="plot_index")
     */
    public function getAll(PlotRepository $repository, PaginatorInterface $paginator, Request $request)
    {
        $pagination = $paginator->paginate(
            $repository->findAllWithJoin(),
            $request->query->getInt('page', 1),
            $request->query->get('limit') ?? self::ROW_LIMIT
        );

        return $this->render('plot/index.html.twig', [
            'pagination' => $pagination,
            'unit_prices' => $repository->findUnitPriceValues()
        ]);
    }

    /**
     * @Route("/export", name="plot_export")
     */
    public function runExport(PlotRepository $repository, Request $request)
    {
        // $exporter = new Exporter(
        //     $repository->findAllForExport(),
        //     'plots'
        // );

        // $exporter->export();

        return $this->redirectToRoute('plot_index', $request->query->all());
    }

    /**
     * @Route("/{id}", name="plot_item")
     */
    public function getItem($id)
    {
        return $this->render('plot/item.html.twig', [
            'id' => $id
        ]);
    }
}
