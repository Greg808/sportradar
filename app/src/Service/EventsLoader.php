<?php


namespace CodingExercise\Service;


use CodingExercise\Model\EventModel;
use DateTime;
use Exception;

class EventsLoader
{
    /**
     * @var PDOEventsStorage
     */
    private $eventsStorage;

    public function __construct(PDOEventsStorage $eventsStorage)
    {
        $this->eventsStorage = $eventsStorage;
    }

    public function getEvents()
    {
        $eventsData = $this->eventsStorage->fetchAllEventsData();
        $events = [];
        foreach ($eventsData as $eventData) {
            $events[] = $this->creatEventModelFromData($eventData);
        }
        return $events;
    }

    private function creatEventModelFromData(array $eventData): EventModel
    {
        $event = new EventModel();
        $event->setId($eventData['id']);
        $event->setTitle($eventData['title']);
        $event->setEventStart($eventData['event_start']);
        $event->setEventEnd($eventData['event_end']);
        $event->setIsCanceled($eventData['is_canceled']);
        $event->setSportTitle($eventData['sport_title']);
        $event->setTeamOneTitle($eventData['team_one_title']);
        $event->setTeamTwoTitle($eventData['team_two_title']);
        $event->setCountryTitle($eventData['country_title']);
        return $event;
    }
}