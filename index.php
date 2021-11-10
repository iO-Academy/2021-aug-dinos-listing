<?php

use DinoApp\Museum\Museum;
use DinoApp\DinosaurHydrator\DinosaurHydrator;

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
    <nav class="navbar sticky-top justify-content-center">
        <img width="150px" alt="Capysaurus Logo" src="Images/CapysaurusLogoLime.png" />
        <p class="h1">Website Name</p>
    </nav>


    <form class="w-25 d-flex flex-row ">
        <div class="form-group">
            <input type="search" class="form-control" name="searchInput" id="exampleFormControlInput1" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
        <?php
        if(isset($_POST['submit'])) {
            echo "<meta http-equiv='refresh' content='0'>";
            echo Museum::displayAllDinos(DinosaurHydrator::search());
        }else {
            echo Museum::displayAllDinos(DinosaurHydrator::getAllDinos());
        }
        ?>
    </div>
</body>
</html>