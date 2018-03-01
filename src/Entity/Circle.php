<?php

namespace App\Entity;

use App\Entity\GeometricShapeAbstract;
use \JsonSerializable;
use \InvalidArgumentException;

class Circle extends GeometricShapeAbstract implements JsonSerializable
{
	private $radius;

	public function __construct($radius) {
		if ($radius <= 0) throw new InvalidArgumentException("Radius must be larger than zero");
		$this->radius = $radius;
	}

	public function getSurface() {
		return round(2 * $this->radius * pi(), 2);
	}

	public function getCircumference() {
		return round(2 * $this->radius * pi(), 2);
	}

	public function jsonSerialize() {
		return [
			"type" 			=> "circle",
			"radius" 		=> $this->radius,
			"surface" 		=> $this->getSurface(),
			"circumference" => $this->getCircumference()
		];
	}
}