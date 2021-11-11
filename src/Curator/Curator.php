<?php

namespace DinoApp\Curator;

use DinoApp\Dinosaur\Dinosaur;
use PDO;

class Curator
{
    protected int $pageNumber = 1;
    protected int $numberOfDinosPerPage = 8;
    protected int $totalPages = 1;
    protected bool $showAll = false;
    protected string $sqlLimit = '';

    /**
     * Creates curator
     * Uses $_GET['PageNumber'] if set, else default pageNumber = 1
     * Determines SQL LIMIT query based on page number and dinos per page (for pagination)
     * Uses $_GET['showAll'] if set, else default showAll = false
     */
    public function __construct()
    {
        $this->pageNumber = $_GET['pageNumber'] ?? 1;
        $this->sqlLimit = $this->setSqlLimit();
        $this->showAll = $_GET['showAll'] ?? false;
    }

    /** Counts the number of rows present in the database
     * Calculates the number of pages based on totalDinos and dinosPerPage (rounded up)
     * @param PDO $db
     * @return int
     */
    public function calcTotalPages(PDO $db): int
    {

        $query = $db->prepare('SELECT COUNT(*) AS `total` FROM `dinos`;');
        $query->execute();
        // Sets the fetch mode (what format we get the data returned in) to the class of Dinosaur
        $query->setFetchMode(PDO::FETCH_ASSOC);
        // Fetches all rows which match the criteria (as opposed to fetch() which returns one row)
        $result = $query->fetch();
        return ceil($result['total']/$this->numberOfDinosPerPage);
    }

    /** Creates a string containing the LIMIT query to append to the sql for pagination
     * @return string
     */
    public function setSqlLimit(): string
    {
        $offset = ($this->pageNumber - 1) * $this->numberOfDinosPerPage;
        return 'LIMIT ' . $offset . ', ' . $this->numberOfDinosPerPage;
    }

    /** Uses the calcTotalPages method to set totalPages
     * @return int
     */
    public function setTotalPages(PDO $db): void
    {
        $this->totalPages = $this->calcTotalPages($db);
    }

    /** Returns the pageNumber property
     * @return int
     */
    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    /** Returns the sqlLimit property
     * @return string
     */
    public function getSqlLimit(): string
    {
        return $this->sqlLimit;
    }

    /** Returns the totalPages property
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /** Returns the showAll property
     * @return bool
     */
    public function getShowAll(): bool
    {
        return $this->showAll;
    }
}