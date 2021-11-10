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
            echo Museum::displayDino(DinosaurHydrator::getDino($db, $_GET['id']));
            ?>
    </div>
</body>
</html>

