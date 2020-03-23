<?php


namespace CodingExercise\Service;

use PDO;

class Container
{
    /**
     * @var array
     */
    private $configuration;

    /**
     * @var PDO
     */
    private $pdo;
    /**
     * @var EventsLoader
     */
    private $eventsLoader;
    /**
     * @var PDOEventsStorage
     */
    private $pdoEventsStorage;

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getPDO(): PDO
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                $this->configuration['db_dsn'],
                $this->configuration['db_u'],
                $this->configuration['db_p']
            );
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

    public function getEventsLoader()
    {
        if ($this->eventsLoader === null) {
            $this->eventsLoader = new EventsLoader($this->getPdoEventsStorage());
        }
        return $this->eventsLoader;

    }
    public function getPdoEventsStorage()
    {
        if ($this->pdoEventsStorage === null) {
            $this->pdoEventsStorage = new PDOEventsStorage($this->getPDO());
        }
        return $this->pdoEventsStorage;
    }

}