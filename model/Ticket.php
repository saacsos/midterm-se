<?php

namespace Model;

class Ticket {
    private $sourceStation;
    private $destinationStation;
    private $trainNumber;
    private $departureTime;
    private $arrivalTime;
    private $bogieNumber;
    private $seatNumber;
    private $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

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

    /**
     * @return mixed
     */
    public function getSourceStation()
    {
        return $this->sourceStation;
    }

    /**
     * @return mixed
     */
    public function getDestinationStation()
    {
        return $this->destinationStation;
    }

    /**
     * @return mixed
     */
    public function getTrainNumber()
    {
        return $this->trainNumber;
    }

    /**
     * @return mixed
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @return mixed
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * @return mixed
     */
    public function getBogieNumber()
    {
        return $this->bogieNumber;
    }

    /**
     * @return mixed
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }


}