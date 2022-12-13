<?php

class Room
{
	private $_roomName;
	private $_price;
	private $_bedNumber;
	private $_hasWifi;
	private $_status;
	private $_hotel;

	public function __construct($roomName, $price, $bedNumber, $hasWifi, Hotel $hotel)
	{
		$this->_roomName = $roomName;
		$this->_price = $price;
		$this->_bedNumber = $bedNumber;
		$this->_hasWifi = $hasWifi;
		$this->_status = "Libre";
		$this->_hotel = $hotel;
		$this->_hotel->addRoom($this);
	}

	public function getInfoRoom()
	{
		return $this->_roomName . " " . $this->_price . " " . $this->_bedNumber . " " . $this->_hasWifi ;
	}

	public function __toString()
	{
		return $this->getInfoRoom();
	}

	/**
	 * Get the value of _roomName
	 */ 
	public function get_roomName()
	{
		return $this->_roomName;
	}

	/**
	 * Set the value of _roomName
	 *
	 * @return  self
	 */ 
	public function set_roomName($_roomName)
	{
		$this->_roomName = $_roomName;

		return $this;
	}

	/**
	 * Get the value of _price
	 */ 
	public function get_price()
	{
		return $this->_price;
	}

	/**
	 * Set the value of _price
	 *
	 * @return  self
	 */ 
	public function set_price($_price)
	{
		$this->_price = $_price;

		return $this;
	}

	/**
	 * Get the value of _bedNumber
	 */ 
	public function get_bedNumber()
	{
		return $this->_bedNumber;
	}

	/**
	 * Set the value of _bedNumber
	 *
	 * @return  self
	 */ 
	public function set_bedNumber($_bedNumber)
	{
		$this->_bedNumber = $_bedNumber;

		return $this;
	}

	/**
	 * Get the value of _hasWifi
	 */ 
	public function get_hasWifi()
	{
		return $this->_hasWifi;
	}

	/**
	 * Set the value of _hasWifi
	 *
	 * @return  self
	 */ 
	public function set_hasWifi($_hasWifi)
	{
		$this->_hasWifi = $_hasWifi;

		return $this;
	}

	/**
	 * Get the value of _status
	 */ 
	public function get_status()
	{
		return $this->_status;
	}

	/**
	 * Set the value of _status
	 *
	 * @return  self
	 */ 
	public function set_status($_status)
	{
		$this->_status = $_status;

		return $this;
	}

	/**
	 * Get the value of _hotel
	 */ 
	public function get_hotel()
	{
		return $this->_hotel;
	}

	/**
	 * Set the value of _hotel
	 *
	 * @return  self
	 */ 
	public function set_hotel($_hotel)
	{
		$this->_hotel = $_hotel;

		return $this;
	}
}
