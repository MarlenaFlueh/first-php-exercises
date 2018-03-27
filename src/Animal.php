<?php

class Animal
{
private $name;

public function __construct($name)
{
    $this->name = $name;
    $this->sayHello("the Bozz");
}

public function sayHello($greetingName)
{
    echo "Hello to {$greetingName} from {$this->name}. ";
}
}