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
<body>
    <nav class="navbar sticky-top justify-content-center">
        <img width="150px" alt="Capysaurus Logo" src="Images/CapybarasaurusLogo.gif" />
        <h1>Capynotasaurus</h1>
    </nav>

    <div class="col">
        <div class="row justify-content-center">
            <form class="d-flex flex-row align-items-center" action="">
                <input name="search" type="search" class="form-control m-2" id="search" value="<?php echo $searchedValue; ?>">
                <select name="filter" class="btn m-1">
                    <option value="">Filter by Food Type</option>
                    <option value="Herbivore" <?php if ($filterValue === 'Herbivore') { echo 'selected'; } ?> >Herbivore</option>
                    <option value="Omnivore" <?php if ($filterValue === 'Omnivore') { echo 'selected'; } ?>>Omnivore</option>
                    <option value="Carnivore" <?php if ($filterValue === 'Carnivore') { echo 'selected'; } ?>>Carnivore</option>
                </select>
                <input name="submit" type="submit" class="btn m-1" value="Search" aria-label="Search"/>
            </form>
            <form>
                <input name="submit" type="submit" class="btn m-1" value="Clear" aria-label="Clear"/>
            </form>
        </div>

        <div class="row justify-content-center">
            <?php
                echo $display;
            ?>
        </div>
    </div>
</body>
</html>

