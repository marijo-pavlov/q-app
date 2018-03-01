<?php

namespace App\Entity;

abstract class GeometricShapeAbstract
{
	abstract public function getSurface();
	abstract public function getCircumference();
}