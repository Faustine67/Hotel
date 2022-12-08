<?php

class Hotel {

private $_name;
private $_adress;
private $_roomnumber;

public function __construct ($name,$adress,$roomnumber)
{
	$this->_name = $name;
	$this->_adress= $adress;
	$this->_roomnumber= $roomnumber;
}
public function getInfoHotel() {
return $this->_name ." ".$this->_adress. " ".$this->_roomnumber. "<br>";
}
}