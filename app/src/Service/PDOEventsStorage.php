<?php

namespace CodingExercise\Service;

use PDO;

class PDOEventsStorage
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Get all events data for events calendar
     *
     * @return array
     */
    public function fetchAllEventsData(): array
    {
        $pdo = $this->pdo;
        $statement = $pdo->prepare($this->getBaseStatement());
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_NAMED);
    }

    /**
     * Get events data by sport id
     * i use prepare and bindParam
     * to avoid sql-injections
     *
     * @param int $sportId
     * @return array
     */
    public function fetchAllEventsDataBySportID(int $sportId): array
    {
        $pdo = $this->pdo;
        $statement = $pdo->prepare($this->getBaseStatement(). 'WHERE events._sport_id = :sportId');
        $statement->bindParam(':sportId', $sportId, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_NAMED);
    }

    /**
     * Helper method that returns the sql statement
     *
     * @return string
     */
    private function getBaseStatement(): string
    {
       return 'Select events.*, sports.title as sport_title, team1.title AS team_one_title, team2.title AS team_two_title, countries.title as country_title 
        FROM events 
        INNER JOIN sports  ON events._sport_id = sports.id 
        INNER JOIN teams  team1 ON events._team_one_id = team1.id 
        INNER JOIN teams  team2 ON events._team_two_id = team2.id
        INNER JOIN countries ON events._country_id = countries.id';
    }


}