<?php
class Car
{
private $ps;

public function __construct($ps)
{
    $this->ps = $ps;
}

public function drive($location)
{
    return "Das Auto fährt {$this->ps} Ps in {$location}. ";
}
}
