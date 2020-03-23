<?php


namespace CodingExercise\Model;


use DateTime;

class EventModel extends BaseModel
{
    /**
     * @var DateTime
     */
    private $eventStart;

    /**
     * @var DateTime
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
     * @return DateTime
     */
    public function getEventStart()
    {
        return $this->eventStart;
    }

    /**
     * @param DateTime $eventStart
     */
    public function setEventStart($eventStart)
    {
        $this->eventStart = $eventStart;
    }

    /**
     * @return DateTime
     */
    public function getEventEnd()
    {
        return $this->eventEnd;
    }

    /**
     * @param DateTime $eventEnd
     */
    public function setEventEnd($eventEnd)
    {
        $this->eventEnd = $eventEnd;
    }

    /**
     * @return bool
     */
    public function isCanceled()
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
    public function getResult()
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
    public function getSportId()
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
    public function getSportTitle()
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
    public function getTeamOneId()
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
    public function getTeamOneTitle()
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
    public function getTeamTwoId()
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
    public function getTeamTwoTitle()
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
    public function getCountryId()
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
}