<?php

use DinoApp\Museum\Museum;
use DinoApp\DinosaurHydrator\DinosaurHydrator;

/**
 * Checks if the form has been submitted and if so returns the dinos from the submitted search. If not, returns all dinos
 *
 * @param PDO $db database
 * @return string of dinos to be displayed
 */
function checkIfSearched(PDO $db): string {
    if (isset($_GET['submit'], $_GET['search'], $_GET['filter'])) {
        return Museum::displayAllDinos(DinosaurHydrator::getSearchedDinos($db, $_GET['search'], $_GET['filter']));
    }
    return Museum::displayAllDinos(DinosaurHydrator::getAllDinos($db));
}

/**
 * Checks if the form has been submitted and if so returns the value the user searched for, otherwise returns search
 *
 * @return string
 */
function searchedValue(): string {
    if (isset($_GET['submit'], $_GET['search'], $_GET['filter'])) {
        return $_GET['search'];
    }
    return '';
}

/**
 * Checks if the form has been submitted and if so returns the value the user filtered for, otherwise returns an empty string
 *
 * @return string
 */
function filteredValue(): string {
    if (isset($_GET['submit'], $_GET['search'], $_GET['filter'])) {
        return $_GET['filter'];
    }
    return '';
}

