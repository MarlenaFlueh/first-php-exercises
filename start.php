<?php

  require "header.php";
  require "nav.php";
  $pdo = new PDO('mysql:host=localhost; dbname=blog', 'root', '');

  ?>

    <br />
    <br />
    <br />

    <div class="container">
      <div class="starter-template">
        <h1>Main site</h1>
        <p class="lead">Welcome to this website.</p>
      </div>
    </div>

<?php

function autoload($className)
{
  if (file_exists("./src/{$className}.php")) {
    require "./src/{$className}.php";
  }
}
spl_autoload_register("autoload");

$res = $pdo->query("SELECT * FROM `posts`");
?>
  <div class="container">
    <ul>
      <?php foreach ($res as $row): ?>
        <li>
          <?php echo $row["title"]; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

<?php require "footer.php"; ?>
