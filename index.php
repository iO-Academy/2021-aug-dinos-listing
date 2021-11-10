<?php
use DinoApp\Dinosaur\Dinosaur;
use DinoApp\Museum\Museum;
use DinoApp\DinosaurHydrator\DinosaurHydrator;

require_once 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capynotasaurus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur&family=Sigmar+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <nav class="navbar sticky-top justify-content-center">
        <img width="150px" alt="Capysaurus Logo" src="Images/CapybarasaurusLogo.gif" />
        <h1>Capynotasaurus</h1>
    </nav>

    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
        <?php
        echo Museum::displayAllDinos(DinosaurHydrator::getAllDinos());
        ?>
    </div>
</body>
</html>

