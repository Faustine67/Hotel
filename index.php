<?php

spl_autoload_register(function ($class_name) {

 require_once $class_name . '.php';
 });

$hotel1 = new Hotel ("Hitlon**** Strasbourg","10 route de la gare 67000 Strasbourg");
$hotel2 = new Hotel("Hotel Regent**** Paris","5 rue des Moulins 67000 Strasbourg");

$room1= new Room("1","200€","2",true, $hotel1);
$room2= new Room("2","150€","1",false,$hotel1);
$room3= new Room("3","200€","2",true,$hotel1);
$room4= new Room("4","150€","1",false,$hotel1);
$room5= new Room("5","200€","2",true,$hotel1);
$room6= new Room("6","150€","1",false,$hotel2);
$room7= new Room("7","200€","2",true,$hotel2);
$room8= new Room("8","150€","1",false,$hotel2);
$room9= new Room("8","150€","1",false,$hotel2);
 
$client1= new Client ("Virgile", "GIBELLO");
$client2= new Client ("Micka", "MURMANN");

echo $hotel1-> getInfoHotel();
echo $hotel2-> getInfoHotel();

echo $room1 ->getInfoRoom()."<br>";
echo $room2 ->getInfoRoom()."<br>";

echo $client1 ->getInfoClient()."<br>";
echo $client2 ->getInfoClient();


// Tableau reservation dans hotel et client //