<?php
class Ticket {
    private $sourceStation;
    private $destinationStation;
    private $trainNumber;
    private $departureTime;
    private $arrivalTime;
    private $bogieNumber;
    private $seatNumber;

    public function __construct($trainNumber)
    {
        $this->trainNumber = $trainNumber;
    }

    public function setTime($departure, $arrival)
    {
        $this->departureTime = $departure;
        $this->arrivalTime = $arrival;
    }

    public function setSeat($bogieNumber, $seatNumber)
    {
        $this->bogieNumber = $bogieNumber;
        $this->seatNumber = $seatNumber;
    }

    public function setStation($source, $destination)
    {
        $this->sourceStation = $source;
        $this->destinationStation = $destination;
    }
}