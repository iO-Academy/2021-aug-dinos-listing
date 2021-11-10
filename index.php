<?php
use DinoApp\Museum\Museum;
use DinoApp\DinosaurHydrator\DinosaurHydrator;

require_once 'vendor/autoload.php';

// Creates a variable which points to the correct database and gives username and password
$db = new PDO('mysql:host=db;dbname=dinosaurs;', 'root', 'password');

/**
 * Checks if the form has been submitted and if so returns the dinos from the submitted search. If not, returns all dinos
 *
 * @param PDO $db database
 * @return string of dinos to be displayed
 */
function checkIfSearched(PDO $db): string {
    if (isset($_GET['submit'])) {
        return Museum::displayAllDinos(DinosaurHydrator::getSearchedDinos($db, $_GET['search']));
    } else {
        return Museum::displayAllDinos(DinosaurHydrator::getAllDinos($db));
    }
}

/**
 * Checks if the form has been submitted and if so returns the value the user searched for, otherwise returns search
 *
 * @return string
 */
function searchedValue(): string {
    if (isset($_GET['submit'])) {
        return $_GET['search'];
    } else {
        return '';
    }
}

$display = checkIfSearched($db);
$searchedValue = searchedValue();

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
            <form class="d-flex flex-row" method="get" action="">
                <input name="search" type="search" class="form-control m-2" id="search" placeholder="<?php echo $searchedValue; ?>">
                <input name="submit" type="submit" class="btn m-1" value="Search" aria-label="Search"/>
                <input id="reset" name="submit" type="submit" class="btn m-1" value="Clear" aria-label="Clear"/>
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

