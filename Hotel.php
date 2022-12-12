<?php

class Hotel {

private $_name;
private $_adress;
private $_room;

public function __construct ($name,$adress)
{
	$this->_name = $name;
	$this->_adress= $adress;
	$this->_room= $room;
	$this->_room-> addHotel($this);

}
public function getInfoHotel() {
return $this->_name ." ".$this->_adress. " ".$this->_room. "<br>";
}

public function __toString()
	{
		return $this->getInfoHotel();
	}
}