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
<?php require "footer.php"; ?>
