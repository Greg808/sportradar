<?php


namespace CodingExercise\Model;


use DateTime;

class EventModel extends BaseModel
{
    /**
     * @var string
     */
    private $eventStart;

    /**
     * @var string
     */
    private $eventEnd;

    /**
     * @var boolean
     */
    private $isCanceled;

    /**
     * @var string
     */
    private $result;

    /**
     * @var integer
     */
    private $sportId;

    /**
     * @var string
     */
    private $sportTitle;

    /**
     * @var integer
     */
    private $teamOneId;

    /**
     * @var string
     */
    private $teamOneTitle;

    /**
     * @var integer
     */
    private $teamTwoId;

    /**
     * @var string
     */
    private $teamTwoTitle;

    /**
     * @var integer
     */
    private $countryId;

    /**
     * @var string
     */
    private $countryTitle;

    /**
     * @return string
     */
    public function getEventStart(): string
    {
        return $this->eventStart;
    }

    /**
     * @param string $eventStart
     */
    public function setEventStart($eventStart)
    {
        $this->eventStart = $eventStart;
    }

    /**
     * @return string
     */
    public function getEventEnd(): string
    {
        return $this->eventEnd;
    }

    /**
     * @param string $eventEnd
     */
    public function setEventEnd($eventEnd)
    {
        $this->eventEnd = $eventEnd;
    }

    /**
     * @return bool
     */
    public function isCanceled(): bool
    {
        return $this->isCanceled;
    }

    /**
     * @param bool $isCanceled
     */
    public function setIsCanceled($isCanceled)
    {
        $this->isCanceled = $isCanceled;
    }

    /**
     * @return string
     */
    public function getResult(): string
    {
        return $this->result;
    }

    /**
     * @param string $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->sportId;
    }

    /**
     * @param int $sportId
     */
    public function setSportId($sportId)
    {
        $this->sportId = $sportId;
    }

    /**
     * @return string
     */
    public function getSportTitle(): string
    {
        return $this->sportTitle;
    }

    /**
     * @param string $sportTitle
     */
    public function setSportTitle($sportTitle)
    {
        $this->sportTitle = $sportTitle;
    }

    /**
     * @return int
     */
    public function getTeamOneId(): int
    {
        return $this->teamOneId;
    }

    /**
     * @param int $teamOneId
     */
    public function setTeamOneId($teamOneId)
    {
        $this->teamOneId = $teamOneId;
    }

    /**
     * @return string
     */
    public function getTeamOneTitle(): string
    {
        return $this->teamOneTitle;
    }

    /**
     * @param string $teamOneTitle
     */
    public function setTeamOneTitle($teamOneTitle)
    {
        $this->teamOneTitle = $teamOneTitle;
    }

    /**
     * @return int
     */
    public function getTeamTwoId(): int
    {
        return $this->teamTwoId;
    }

    /**
     * @param int $teamTwoId
     */
    public function setTeamTwoId($teamTwoId)
    {
        $this->teamTwoId = $teamTwoId;
    }

    /**
     * @return string
     */
    public function getTeamTwoTitle(): string
    {
        return $this->teamTwoTitle;
    }

    /**
     * @param string $teamTwoTitle
     */
    public function setTeamTwoTitle($teamTwoTitle)
    {
        $this->teamTwoTitle = $teamTwoTitle;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * @return string
     */
    public function getCountryTitle(): string
    {
        return $this->countryTitle;
    }

    /**
     * @param string $countryTitle
     */
    public function setCountryTitle($countryTitle)
    {
        $this->countryTitle = $countryTitle;
    }

    public function getPlayDay(): string
    {
        $dateTime = $this->stringToDateTime($this->getEventStart());
        return $dateTime->format('D');
    }

    public function getPlayDate(): string
    {
        $dateTime = $this->stringToDateTime($this->getEventStart());
        return $dateTime->format('d.m.Y');
    }

    public function getPlayTime(): string
    {
        $dateTime = $this->stringToDateTime($this->getEventStart());
        return $dateTime->format('H:i');
    }

    public function stringToDateTime(string $dateTimeString): DateTime
    {
        return new DateTime($dateTimeString);
    }
}