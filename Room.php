<?php

class Room {
	private $_roomName;
	private $_price;
	private $_bedNumber;
	private $_wifi;
	private $_status;
	private $_hotel;

	public function __construct ($roomName,$price,$bedNumber,$wifi,$hotel)
	{
		$this->_roomName = $roomName;
		$this->_price = $price;
		$this->_bedNumber = $bedNumber;
		$this->_wifi = $wifi;
		$this->_status = "Libre";
		$this->_hotel = $hotel;
		$this->_hotel->_listrooms= [];
	}
	public function getInfoRoom() {
		return $this->_roomName ." ".$this->_price. " ".$this->_bedNumber." ".$this->_wifi." ".$this->_hotel "<br>";
		}

		public function addHotel($rooms)
	{
		$this->_listrooms[] = $rooms;
	}

	public function displayRoom ()
	{ $result = "La chambre $this appartient à l'hotel"."<br>";
		foreach ($this->listrooms as $room){
			$result .=$rooms."<br>";
		}
		return $result;
	}

		public function __toString()
		{
			return $this->getInfoRoom();
		}
}