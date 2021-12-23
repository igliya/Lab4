<?php

namespace App\Controller;

use App\Service\SolveService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1")
 */
class SolveController extends AbstractController
{
    /**
     * @Route("/solve", name="solve", methods={"POST"})
     */
    public function solve(Request $request, SolveService $solveService): Response
    {
        $body = json_decode($request->getContent(), true);
        $Sd = (double) $body['Sd'];
        $Sh = (double) $body['Sh'];
        $T = (double) $body['T'];
        $Wmax = (double) $body['Wmax'];
        $Wmin = (double) $body['Wmin'];
        $Wmean = (double) $body['Wmean'];
        $dt = (double) $body['dt'];
        $p = (double) $body['p'];
        $Tpr = (double) $body['Tpr'];

        return $this->json($solveService->solve($Sd, $Sh, $T, $Wmax, $Wmin, $Wmean, $dt, $p, $Tpr));
    }
}
