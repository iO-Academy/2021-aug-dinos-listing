<?php

namespace DinoApp\Curator;

use DinoApp\Dinosaur\Dinosaur;
use PDO;

class Curator
{
    protected int $pageNumber = 1;
    protected int $numberOfDinosPerPage = 8;
    protected int $totalPages;
    protected bool $showAll = false;
    protected string $sqlLimit = '';

    public function __construct($db)
    {
        $this->pageNumber = $_GET['pageNumber'] ?? 1;
        $this->totalPages = $this->calcTotalPages($db);
        $this->sqlLimit = $this->setSqlLimit();
    }

    public function calcTotalPages($db): int
    {
        $query = $db->prepare('SELECT COUNT(*) AS `total` FROM `dinos`;');
        $query->execute();
        // Sets the fetch mode (what format we get the data returned in) to the class of Dinosaur
        $query->setFetchMode(PDO::FETCH_ASSOC);
        // Fetches all rows which match the criteria (as opposed to fetch() which returns one row)
        $result = $query->fetch();
        return ceil($result['total']/$this->numberOfDinosPerPage);
    }

    public function setSqlLimit(): string
    {
        $offset = ($this->pageNumber - 1) * $this->numberOfDinosPerPage;
        return 'LIMIT ' . $offset . ', ' . $this->numberOfDinosPerPage;
    }

    public function setPage($pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    /**
     * @return int
     */
    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    /**
     * @return int
     */
    public function getNumberOfDinosPerPage(): int
    {
        return $this->numberOfDinosPerPage;
    }

    /**
     * @return string
     */
    public function getSqlLimit(): string
    {
        return $this->sqlLimit;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @return bool
     */
    public function isShowAll(): bool
    {
        return $this->showAll;
    }
}