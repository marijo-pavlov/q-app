<?php

namespace App\Service;

class GeometryCalculatorService
{
	public function sumTwoSurfaces($a, $b) {
		return $a->getSurface() + $b->getSurface();
	}

	public function sumTwoCircumferences($a, $b) {
		return $a->getCircumference() + $b->getCircumference();
	} 
}