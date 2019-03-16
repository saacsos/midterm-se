<?php

namespace Model;

class PassengerTicket {
    private $name;
    private $tickets = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    public function addTicket(Ticket $ticket)
    {
        array_push($this->tickets, $ticket);
    }

    public function getTicket($index)
    {
        return $this->tickets[$index];
    }
}