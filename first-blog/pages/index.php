<?php
require "header.php";
require "nav.php";
include ("../src/database.php");
?>

    <br />
    <br />
    <br />

    <div class="container">
        <div class="starter-template">
        <h1>The new Blog</h1>
        <p class="lead">Welcome to the new Blog.</p>
        </div>
        <div>
            <?php $res = fetch_posts(); ?>
            <ul>
                <?php foreach($res as $row): ?>
                    <li><?php echo $row["title"] ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

<?php require "footer.php"; ?>
