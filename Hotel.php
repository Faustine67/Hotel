<?php

class Hotel {

private $_name;
private $_adress;
private array $_listRoom;
private array $_listReservation;

public function __construct ($name,$adress)
{
	$this->_name = $name;
	$this->_adress= $adress;
	$this->_listRoom = [];
	$this->_listReservation = [];
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
public function addReservation($room){
	$this->_listRoom[]= $room;
}
public function displayReservation(){
	$result = $this;
		foreach ($this->_listReservation as $reservation) {
			$result .= $reservation . "<br>";
		}
		return $result;
	}
public function getInfoHotel() {
return $this->_name ." ".$this->_adress. " "."<br>";
}

public function dispInfoHotel(){
	$result = $this;
		foreach ($this->$_listRoom as $room->$value){
			$count++;
		}
		echo $count;

}

public function countRooms(){
	return count($this->_listRoom);
}

public function __toString()
	{
		return $this->getInfoHotel();
	}
}

// foreach dispo qui parcours la liste des chambre-> ccreation compteur