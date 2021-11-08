<?php

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
    <nav class="navbar sticky-top justify-content-center">
        <img width="150px" alt="Capysaurus Logo" src="Images/CapysaurusLogoLime.png" />
        <p class="h1">Website Name</p>
    </nav>

    <div class=" body row row-cols-sm-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
        <div class="card m-4" style="width: 18rem;">
            <h2 class="card-title text-center mt-3">Dino Name</h2>
            <img src="Images/CapysaurusLogoLime.png" class="dino-img card-img-top w-75 mx-auto " alt="leaf">
            <div class="card-body d-flex flex-row justify-content-space-between">
               <div class="food-type d-flex flex-row align-items-center">
                    <img width="30px" src="Images/Leaf.png" alt="leaf">
                    <p class="card-text">Some quick.</p>
               </div>
                <div class="button">
                    <a href="#" class="btn">More info</a>
                </div>
            </div>
        </div>

        <div class="card m-4" style="width: 18rem;">
            <h2 class="card-title text-center">Dino Name</h2>
            <img src="Images/CapysaurusLogoLime.png" class="card-img-top border w-75 mx-auto" alt="leaf">
            <div class="card-body d-flex flex-row">
                <img width="30px" src="Images/Leaf.png" alt="leaf">
                <p class="card-text">Some quick.</p>
                <a href="#" class="btn">Go somewhere</a>
            </div>
        </div>

        <div class="card m-4" style="width: 18rem;">
            <h2 class="card-title text-center">Dino Name</h2>
            <img src="Images/CapysaurusLogo.png" class="card-img-top border w-75 mx-auto" alt="leaf">
            <div class="card-body d-flex flex-row">
                <img width="30px" src="Images/Leaf.png" alt="leaf">
                <p class="card-text">Some quick.</p>
                <a href="#" class="btn">Go somewhere</a>
            </div>
        </div>

        <div class="card m-4" style="width: 18rem;">
            <h2 class="card-title text-center">Dino Name</h2>
            <img src="Images/CapysaurusLogo.png" class="card-img-top border w-75 mx-auto" alt="leaf">
            <div class="card-body d-flex flex-row">
                <img width="30px" src="Images/Leaf.png" alt="leaf">
                <p class="card-text">Some quick.</p>
                <a href="#" class="btn">Go somewhere</a>
            </div>
        </div>

        <div class="card m-4" style="width: 18rem;">
            <h2 class="card-title text-center">Dino Name</h2>
            <img src="Images/CapysaurusLogo.png" class="card-img-top border w-75 mx-auto" alt="leaf">
            <div class="card-body d-flex flex-row">
                <img width="30px" src="Images/Leaf.png" alt="leaf">
                <p class="card-text">Some quick.</p>
                <a href="#" class="btn">Go somewhere</a>
            </div>
        </div>

        <div class="card m-4" style="width: 18rem;">
            <h2 class="card-title text-center">Dino Name</h2>
            <img src="Images/CapysaurusLogo.png" class="card-img-top border w-75 mx-auto" alt="leaf">
            <div class="card-body d-flex flex-row">
                <img width="30px" src="Images/Leaf.png" alt="leaf">
                <p class="card-text">Some quick.</p>
                <a href="#" class="btn">Go somewhere</a>
            </div>
        </div>
    </div>
</body>
</html>