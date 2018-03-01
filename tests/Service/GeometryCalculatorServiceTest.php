<?php

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\GeometryCalculatorService;
use App\Entity\Circle;
use App\Entity\Triangle;

class GeometryCalculatorServiceTest extends TestCase 
{
	public function testSumTwoSurfaces() {
		$service = new GeometryCalculatorService();
		$triangle = new Triangle(3,4,5);
		$circle = new Circle(2);

		$this->assertEquals($triangle->getSurface() + $circle->getSurface(), $service->sumTwoSurfaces($triangle, $circle));
	}

	public function testSumTwoCircumferences() {
		$service = new GeometryCalculatorService();
		$triangle = new Triangle(3,4,5);
		$circle = new Circle(2);

		$this->assertEquals($triangle->getCircumference() + $circle->getCircumference(), $service->sumTwoCircumferences($triangle, $circle));
	}
}