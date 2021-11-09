<?php

use DinoApp\DinosaurHydrator\DinosaurHydrator;
use DinoApp\Museum\Museum;

require_once 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dino Listing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <nav class="navbar justify-content-center">
        <img width="150px" alt="Capysaurus Logo" src="Images/CapybarasaurusLogo.gif" />
        <p class="h1">Capynotasaurus</p>
    </nav>

    <div class="body row g-0 m-4 justify-content-center">
            <?php
            echo Museum::displayDino(DinosaurHydrator::getDino($_GET['id']));
            ?>
    </div>
</body>
</html>

