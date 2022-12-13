<?php

class Room
{
	private $_room;
	private $_price;
	private $_bedNumber;
	private $_hasWifi;
	private $_status;
	private $_hotel;
	private $_listReservation;

	public function __construct($room, $price, $bedNumber, $hasWifi, Hotel $hotel)
	{
		$this->_room = $room;
		$this->_price = $price;
		$this->_bedNumber = $bedNumber;
		$this->_hasWifi = $hasWifi;
		$this->_status = "Libre";
		$this->_hotel = $hotel;
		$this->_hotel->addRoom($this);
		$this->_listReservation = [];
	}

	public function getInfoRoom()
	{
		return $this->_room . " " . $this->_price . " " . $this->_bedNumber . " " . $this->_hasWifi ;
	}

	public function addReservation($reservation)
	{
		$this->_listReservation[] = $reservation;
	}

	
	public function get_room()
	{
		return $this->_room;
	}
	
	public function get_price()
	{
		return $this->_price;
	}
	
	public function get_bedNumber()
	{
		return $this->_bedNumber;
	}
	
	public function get_hasWifi()
	{
		return $this->_hasWifi;
	}
	
	public function get_status()
	{
		return $this->_status;
	}
	
	public function get_hotel()
	{
		return $this->_hotel;
	}

	public function __toString()
	{
		return $this->getInfoRoom();
	}
}
