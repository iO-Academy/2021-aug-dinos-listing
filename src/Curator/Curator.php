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

    /** Calculates the number of pages based on totalDinos and dinosPerPage (rounded up)
     * @param int $totalDinos
     * @return int
     */
    public function calcTotalPages(int $totalDinos): int
    {
        return ceil($totalDinos/$this->numberOfDinosPerPage);
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
    public function setTotalPages(int $totalDinos): void
    {
        $this->totalPages = $this->calcTotalPages($totalDinos);
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