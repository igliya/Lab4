<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1")
 */
class TestController extends AbstractController
{
    /**
     * @Route("/test1", name="test1", )
     */
    public function test1(): Response
    {
        return $this->json([
            'Sd' => 100,
            'Sh' => 5,
            'T' => 100,
            'Wmax' => 10000,
            'Wmin' => 1000,
            'Wmean' => 5500,
            'dt' => 1,
            'p' => 0.05,
            'Tpr' => 0
        ]);
    }

    /**
     * @Route("/test2", name="test2")
     */
    public function test2(): Response
    {
        return $this->json([
            'Sd' => 100,
            'Sh' => 5,
            'T' => 100,
            'Wmax' => 1100,
            'Wmin' => 900,
            'Wmean' => 1000,
            'dt' => 3,
            'p' => 0.1,
            'Tpr' => 2
        ]);
    }

    /**
     * @Route("/test3", name="test3")
     */
    public function test3(): Response
    {
        return $this->json([
            'Sd' => 65,
            'Sh' => 25,
            'T' => 100,
            'Wmax' => 11.57,
            'Wmin' => 1.43,
            'Wmean' => 6.5,
            'dt' => 2,
            'p' => 0.1,
            'Tpr' => 0
        ]);
    }
}
