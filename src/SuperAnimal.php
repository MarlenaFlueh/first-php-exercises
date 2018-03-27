<?php

class SuperAnimal extends Animal
{
public $color;

public function __construct($name, $color)
{
    parent::__construct($name);
    $this->color = $color;
}

public function sayHello($greetingName)
{
    parent::sayHello($greetingName);
}

public function fly($canFly)
{
    return "This animal {$canFly}.";
}
}
