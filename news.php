<?php

require "header.php";
require "nav.php";

?>

  <br />
  <br />
  <br />

  <div class="container">
    <div class="starter-template">
      <h1>News</h1>
      <p class="lead">Welcome to the news site.</p>
    </div>
  </div>
    <br />
  <div class="container">

<?php

// car class
require "src/Car.php";

$vw = new Car(140);
echo $vw->drive("Berlin");

// Animal class
require "src/Animal.php";

$parrot = new Animal("Frida");

// Vererbung SuperAnimal class
require "src/SuperAnimal.php";

$superParrot = new SuperAnimal("Krähh", "red");
$superParrot->sayHello("Citcat");
echo $superParrot->fly("can fly");
echo $superParrot->color;

$superCat = new SuperAnimal("Citcat", "green");
echo $superCat->fly("can't fly!");

// getter and setter example, Motocross class
require "src/Motocross.php";

$yamaha = new Motocross("79 Ps, ");
echo $yamaha->getSpeed();
$yamaha->setSpeed("46 Ps, ");
echo $yamaha->getSpeed();

// Supermoto class
require "src/Supermoto.php";

$kawasaki = new Supermoto("25 Ps");
echo $kawasaki->getSpeed();

?>

  </div>

<?php require "footer.php"; ?>
