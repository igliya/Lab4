<?php

namespace App\Controller;

use App\Service\TestService;
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
    public function test1(TestService $testService): Response
    {
        return $this->json($testService->test1());
    }

    /**
     * @Route("/test2", name="test2")
     */
    public function test2(TestService $testService): Response
    {
        return $this->json($testService->test2());
    }

    /**
     * @Route("/test3", name="test3")
     */
    public function test3(TestService $testService): Response
    {
        return $this->json($testService->test3());
    }
}
