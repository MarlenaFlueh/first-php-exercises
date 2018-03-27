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
    return "Das Auto fährt mit {$this->ps} PS in {$location}. ";
}
}
