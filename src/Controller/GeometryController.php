<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse; 
use App\Entity\Triangle;
use App\Entity\Circle;
use \InvalidArgumentException;

class GeometryController extends Controller
{
	/**
	 * @Route("/triangle/{a}/{b}/{c}")
	 */
	public function serializeTriangle($a, $b, $c) {
		try {
			$triangle = new Triangle($a, $b, $c);
			return new JsonResponse([
				"status" 	=> "ok",
				"data"	 	=> $triangle
			]);
		}
		catch (InvalidArgumentException $e) {
			return new JsonResponse([
				"status" 	=> "error",
				"error"		=> $e->getMessage()
			]);
		}
	}

	/**
	 * @Route("/circle/{radius}")
	 */
	public function serializeCircle($radius) {
		try {
			$circle = new Circle($radius);
			return new JsonResponse([
				"status" 	=> "ok",
				"data" 		=> $circle
			]);
		}
		catch (InvalidArgumentException $e) {
			return new JsonResponse([
				"status"	=> "error",
				"error"		=> $e->getMessage()
			]);
		}
	}
}