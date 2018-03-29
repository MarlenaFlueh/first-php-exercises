<?php require "header.php";
  require "nav.php"
  ?>

    <br />
    <br />
    <br />

    <div class="container">
      <div class="starter-template">
        <h1>About us</h1>
        <p class="lead">Welcome to the about us site.</p>
        <?php

          $ware = ["Hamburg" => 1000000, "Berlin" => 1500000, "Hannover" => 800000];
          $ware["Aachen"] = "400000";

          echo "<ul>";
          foreach($ware AS $key => $produkt) {
            echo "<li>{$key}: {$produkt}</li>";
          }
          echo "</ul>";

          $gemüse = ["Paprika", "Kartoffel", "Karotte", "Gurke"];

          $essen = ["gemüse" => $gemüse];

          echo "<ul>";
          foreach ($essen AS $gemüse => $items) {
            echo "<li>{$gemüse}</li><ul>";
            foreach ($items AS $item) {
              echo "<li>{$item}</li>";
            }
            echo "</ul>";
          }
          echo "</ul>";

        ?>
      </div>
    </div>

<?php require "footer.php"; ?>
