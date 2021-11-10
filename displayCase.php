<?php

use DinoApp\DinosaurHydrator\DinosaurHydrator;
use DinoApp\Museum\Museum;

require_once 'vendor/autoload.php';

// Creates a db connection
$db = new PDO('mysql:host=db;dbname=dinosaurs;', 'root', 'password');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dino Listing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur&family=Sigmar+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
<nav class="navbar sticky-top justify-content-center">
    <img width="150px" alt="Capysaurus Logo" src="Images/CapybarasaurusLogo.gif" />
    <h1>Capynotasaurus</h1>
</nav>

    <div class="body row g-0 m-4 justify-content-center">
            <?php
            if (isset($_GET['id'])) {
                $dino = DinosaurHydrator::getDino($db, intval($_GET['id']));
                if ($dino instanceof \DinoApp\Dinosaur\Dinosaur) {
                    echo Museum::displayDino($dino);
                } else {
                    ?>
                    <div class='d-flex flex-column align-items-center'><p style='font-size: 50px; color: #FFFFFF'>A unicorn is not a dinosaur!</p><a href='index.php' tabindex='-1'><button class='button'>Go Home</button></a></div>
                    <?php
                }
            } else {
                ?>
                <div class='d-flex flex-column align-items-center'><p style='font-size: 50px; color: #FFFFFF'>Your dinosaur has escaped!</p><a href='index.php' tabindex='-1'><button class='button'>Go Home</button></a></div>
                <?php
            }
            ?>
    </div>
</body>
</html>

