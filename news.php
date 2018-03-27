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

function autoload($className) {
    if (file_exists("./src/$className.php")) {
        require "./src/$className.php";
    }
}
spl_autoload_register("autoload");

// car class

$vw = new Car(140);
echo $vw->drive("Berlin");

// Animal class

$parrot = new Animal("Frida");

// Vererbung SuperAnimal class

$superParrot = new SuperAnimal("Krähh", "red");
$superParrot->sayHello("Citcat");
echo $superParrot->fly("can fly");
echo $superParrot->color;

$superCat = new SuperAnimal("Citcat", "green");
echo $superCat->fly("can't fly!");

// getter and setter example, Motocross class

$yamaha = new Motocross("79 Ps, ");
echo $yamaha->getSpeed();
$yamaha->setSpeed("46 Ps, ");
echo $yamaha->getSpeed();

// Supermoto class

$kawasaki = new Supermoto("25 Ps");
echo $kawasaki->getSpeed();

?>

  </div>

<?php require "footer.php"; ?>
