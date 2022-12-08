<?php

class Client
{
	private $_name;
	private $_firstname;

	public function __construct($name, $firstname)
	{
		$this->_name = $name;
		$this->_firstname = $firstname;
	}

	public function GetInfoClient()
	{
		return $this->_name . " " . $this->_firstname;
	}
}
