<?php

class Hotel
{

	private $_name;
	private $_adress;
	private array $_listRoom;
	private array $_listReservation;

	public function __construct($name, $adress)
	{
		$this->_name = $name;
		$this->_adress = $adress;
		$this->_listRoom = [];
		$this->_listReservation = [];
	}
	public function addRoom($room)
	{
		$this->_listRoom[] = $room;
	}

	function displayRoom()
	{
		$result = "";
		foreach ($this->_listRoom as $room) {
			$result .= $room;
		}
		return $result;
	}
	public function addReservation($reservation)
	{
		$this->_listReservation[] = $reservation;
	}
	public function displayReservation()
	{
		$result = $this;
		foreach ($this->_listReservation as $reservation) {
			$result .= $reservation . "<br>";
		}
		return $result;
	}

	public function getName()
	{
		return $this->_name;
	}
	public function getInfoHotel()
	{
		return $this->_name . "<br> " . $this->_adress . " " . "<br>";
	}
	
	public function countRooms()
	{
		return count($this->_listRoom);
	}
	public function countReservation()
	 {
		return count($this->_listReservation);
	 }

	// public function GetAvailable()
	//  {
	// 	$reserved = count($this->_listReservation);
	// 	$room = count($this->_listRoom);
	// 	$available = $room -$reserved;
	// 	return $available;
	//  }
	public function GetAvailable()
	{
		return $this->countRooms()-$this->countReservation();
	}


	public function __toString()
	{
		return $this->getInfoHotel();
	}
}