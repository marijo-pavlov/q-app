<?php

namespace App\Entity;

use App\Entity\GeometricShapeAbstract;
use \JsonSerializable;
use \InvalidArgumentException;

class Triangle extends GeometricShapeAbstract implements JsonSerializable
{
	private $a;
	private $b;
	private $c;

	public function __construct($a, $b, $c) {
		if ($a <= 0 || $b <= 0 || $c <= 0) throw new InvalidArgumentException("All three edges must be larger than zero.");
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}

	public function getSurface() {
		$s = ($this->a + $this->b + $this->c)/2;
		return round(sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c)), 2);
	}

	public function getCircumference() {
		return round($this->a + $this->b + $this->c, 2);
	}

	public function jsonSerialize() {
		return [
			"type" 			=> "triangle",
			"a"				=> $this->a,
			"b"				=> $this->b,
			"c"				=> $this->c,
			"surface" 		=> $this->getSurface(),
			"circumference" => $this->getCircumference()
		];
	}
}