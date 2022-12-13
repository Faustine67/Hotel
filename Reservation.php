<?php

class Reservation
{
    private $hotel;
    private $_room;
    private $date;

    public function __construct (Hotel $hotel,Room $room, $date)
    {
        $this->_hotel = $hotel;
        $this->_hotel->addReservation($this);
        $this->_room = $room;
        $this->_room->addReservation($this);
        $this->_date = $date;
    }

    public function getInfoReservation()
	{
		return $this->_hotel.""> $this->_room."".$this->_date;
	}
	
	public function __toString()
	{
		return $this->getInfoReservation();
	}
}
