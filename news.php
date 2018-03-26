<?php
require "header.php";
require "nav.php";

$produkte = [
  [
    "title" => "Orange",
    "desc" => "Orangen sind gesund."
  ],
  [
    "title" => "Apfel",
    "desc" => "Äpfel sind auch gesund."
  ],
  [
    "title" => "Ananas",
    "desc" => "Ananas sind auch gesund."
  ]
];

?>

  <br />
  <br />
  <br />

  <div class="container">
    <div class="starter-template">
      <h1>News</h1>
      <p class="lead">Welcome to the news site.</p>
      <div class="container">
        <div class="btn-group" role="group" aria-label="...">

        <?php foreach ($produkte as $key => $item) { ?>
          <button type='button' class='btn btn-default'><?= $item["title"] ?></button>
        <?php }; ?>
        
        </div>
      </div>
    </div>
  </div>
    <br />
  <div class="container">

  <?php

  function add($a, $b)
  {
    return $a + $b;
  };

  function mult($a, $b)
  {
    return $a * $b;
  };

  // constructor (public variablen)
  class Car
  {
    private $ps;

    public function __construct($ps)
    {
      $this->ps = $ps;
    }

    public function drive($location)
    {
      echo "Das Auto fährt mit {$this->ps} PS in {$location}. ";
    }
  }

  $vw = new Car(140);
  $vw->drive("Berlin");

  // constructor (public variablen)
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

  $parrot = new Animal("Frida");

  // Vererbung
  class SuperAnimal extends Animal
  {
    public function sayHello($greetingName)
    {
      parent::sayHello($greetingName);
    }

    public function fly($canFly)
    {
      echo "This animal {$canFly}.";
    }
  }

  $superParrot = new SuperAnimal("Krähh");
  $superParrot->sayHello("Citcat");
  $superParrot->fly("can fly");

  $superCat = new SuperAnimal("Citcat");
  $superCat->fly("can't fly!");

  // getter and setter example
  class Motocross
  {
    private $speed;

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

  $yamaha = new Motocross("79 Ps");
  echo $yamaha->getSpeed();
  $yamaha->setSpeed("46 Ps");
  echo $yamaha->getSpeed();

  ?>
  
  </div>

<?php require "footer.php"; ?>
