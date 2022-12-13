<?php

class Hotel {

private $_name;
private $_adress;
private array $_listRoom;

public function __construct ($name,$adress)
{
	$this->_name = $name;
	$this->_adress= $adress;
	$this->_listRoom = [];
}
public function addRoom($room){
	$this->_listRoom[]= $room;
}

function displayRoom(){
	$result="";
	foreach ($this->_listRoom as $room){
	$result.= $room;
	}
	return $result;
}

public function getInfoHotel() {
return $this->_name ." ".$this->_adress. " "."<br>";
}

public function __toString()
	{
		return $this->getInfoHotel();
	}
}