<?php

class Motocross
{
protected $speed;

public function __construct($speed)
{
    $this->speed = $speed;
}

public function getSpeed()
{
    return $this->speed;
}

public function setSpeed($speed)
{
    $this->speed = $speed;
}

private function color($newColor)
{
    $this->newColor = $newColor;
}
}
