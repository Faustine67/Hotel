<?php

spl_autoload_register(function ($class_name) {

 require_once $class_name . '.php';
 });

$hotel1 = new Hotel ("Hitlon","10 route de la gare 67000 Strasbourg","30");
$hotel2 = new Hotel("Regent","5 rue des Moulins 67000 Strasbourg","20");

$room1= new Room("1","200€","2","Oui","Libre");
$room2= new Room("2","150€","1","Non","Occupée");

echo $hotel1-> getInfoHotel();
echo $hotel2-> getInfoHotel();

echo $room1 ->getInfoRoom();
echo $room2 ->getInfoRoom();