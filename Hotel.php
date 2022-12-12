<?php

class Hotel {

private $_name;
private $_adress;
private $_roomNumber;

public function __construct ($name,$adress,$roomNumber)
{
	$this->_name = $name;
	$this->_adress= $adress;
	$this->_roomnumber= $roomNumber;
}
public function getInfoHotel() {
return $this->_name ." ".$this->_adress. " ".$this->_roomnumber. "<br>";
}

public function __toString()
	{
		return $this->getInfoHotel();
	}
}