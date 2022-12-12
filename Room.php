<?php

class Room {
	private $_roomName;
	private $_price;
	private $bedNumber;
	private $wifi;
	private $status;

	public function __construct ($roomName,$price,$bedNumber,$wifi,$status)
	{
		$this->_roomName = $roomName;
		$this->_price = $price;
		$this->_bedNumber = $bedNumber;
		$this->_wifi = $wifi;
		$this->_status = $status;
	}
	public function getInfoRoom() {
		return $this->_roomName ." ".$this->_price. " ".$this->_bedNumber." ".$this->_wifi." ".$this->_status. "<br>";
		}

		public function __toString()
		{
			return $this->getInfoRoom();
		}
}