<?php

namespace App\Controller;

use App\Calculator\Services\CalculatorServiceFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    #[Route('/', name: 'calculator', methods: ['GET'])]
    public function index(Request $request): Response
    {
        return $this->render('calculator/index.html.twig');
    }
    #[Route('/calculate', name: 'calculate', methods: ['post'])]
    public function calculate(Request $request): Response
    {
        $error = null;
        $result = null;
        $valueOne = (float) $request->request->get('valueOne');
        $valueTwo = (float) $request->request->get('valueTwo');
        $operation = $request->request->get('operation');
        $calculatorService = CalculatorServiceFactory::create($operation);
        try {
            $result = $calculatorService->calculate($valueOne, $valueTwo);
        } catch (\InvalidArgumentException $e) {
            $error = $e->getMessage();
        }
        if ($error) {
            return new JsonResponse(['error' => $error], 400);
        }
        return new JsonResponse(['result' => $result]);
    }
}
