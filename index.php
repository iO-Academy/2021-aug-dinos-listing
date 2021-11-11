<?php

require_once 'vendor/autoload.php';
require_once 'src/functions.php';

// Creates a variable which points to the correct database and gives username and password
$db = new PDO('mysql:host=db;dbname=dinosaurs;', 'root', 'password');

$display = checkIfSearched($db);
$searchedValue = searchedValue();
$filterValue = filteredValue();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capynotasaurus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur&family=Sigmar+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css" />
</head>
<body class="mainPage">
    <nav class="navbar sticky-top justify-content-center">
        <img width="150px" alt="Capysaurus Logo" src="Images/CapybarasaurusLogo.gif" />
        <h1>Capynotasaurus</h1>
    </nav>

    <div class="col">
        <div class="row d-flex flex-column flex-md-row justify-content-center align-items-center">
            <form class="d-flex flex-column flex-md-row justify-content-center align-items-center" action="">
                <input name="search" type="search" class="form-control m-1" id="search" value="<?php echo $searchedValue; ?>" aria-label="Search Field" />
                <select name="filter" class="btn m-1 w-sm-50" aria-label="Filter">
                    <option value="">Filter by Food Type</option>
                    <option value="Herbivore" <?php if ($filterValue === 'Herbivore') { echo 'selected'; } ?> >Herbivore</option>
                    <option value="Omnivore" <?php if ($filterValue === 'Omnivore') { echo 'selected'; } ?>>Omnivore</option>
                    <option value="Carnivore" <?php if ($filterValue === 'Carnivore') { echo 'selected'; } ?>>Carnivore</option>
                </select>
                <input name="submit" type="submit" class="btn m-1" value="Search" aria-label="Submit Search"/>
            </form>
            <form class="justify-content-center">
                <input name="submit" type="submit" class="btn m-1" value="Clear" aria-label="Clear"/>
            </form>
        </div>
        <div class="row justify-content-center">
            <?php
                echo $display;
            ?>
        </div>
    </div>
    <footer class="footer row d-flex flex-row justify-content-center align-items-center fixed-bottom">
        <div class="d-flex col-md-4 col-sm-12 justify-content-md-start justify-content-center align-items-center">
            <p class="pl-2 m-0">&copy Capynotasaurus-2021</p>
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center col-4">
            <a href="#" tabindex="-1">
                <button class="button">To Top</button>
            </a>
        </div>
        <div class="d-flex flex-row-reverse col-4">
            <img class="pr-2" src="Images/EyupLogo.png" width="70px" alt="Eyup logo"/>
        </div>

    </footer>
</body>
</html>

