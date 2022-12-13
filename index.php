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
$room9= new Room("9","150€","1",false,$hotel2);
 
$client1= new Client ("Micka", "MURMANN");
$client2= new Client ("Virgile", "GIBELLO");

$reservation1= new Reservation($hotel1, $room1,"date");

echo "<strong>".$hotel1-> getInfoHotel()."</strong>";
echo "<strong>".$hotel2-> getInfoHotel()."</strong>";

    $result= count($room);
echo "Nombre de chambres :".$result."<br>";
echo "Nombre de chambres réservées:"."<br>";
echo "Nombre de chambres dispo:" ."<br>";

echo $hotel1->countRooms();

// echo "<strong>"."Reservation de l'hotel Hilton"."</strong>"."<br>";
//     echo $room[1] ->getInfoRoom()."<br>";
//     echo $room[2] ->getInfoRoom()."<br>";
//     echo $room[3] ->getInfoRoom()."<br>";
//     echo $room[4] ->getInfoRoom()."<br>";
//     echo $room[5] ->getInfoRoom()."<br>";

// echo "<strong>"."Reservation de l'hotel Regent"."</strong>"."<br>";
//     echo $room[6] ->getInfoRoom()."<br>";
//     echo $room[7] ->getInfoRoom()."<br>";
//     echo $room[8] ->getInfoRoom()."<br>";
//     echo $room[9] ->getInfoRoom()."<br>";

echo "<strong>"."Reservation de". $client1 ->getInfoClient()."</strong>"."<br>";

echo "<strong>"."Reservation de". $client2 ->getInfoClient()."</strong>"."<br>";

echo $reservation1->getInfoReservation();