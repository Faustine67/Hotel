<?php

spl_autoload_register(function ($class_name) {

 require_once $class_name . '.php';
 });

$hotel1 = new Hotel ("Hitlon**** Strasbourg","10 route de la gare 67000 Strasbourg");
$hotel2 = new Hotel("Hotel Regent**** Paris","5 rue des Moulins 67000 Strasbourg");

$room1= new Room("chambre 1","200€","2",true, $hotel1);
$room2= new Room("chambre 2","150€","1",false,$hotel1);
$room3= new Room("chambre 3","200€","2",true,$hotel1);
$room4= new Room("chambre 4","150€","1",false,$hotel1);
$room5= new Room("chambre 5","200€","2",true,$hotel1);
$room6= new Room("chambre 6","150€","1",false,$hotel2);
$room7= new Room("chambre 7","200€","2",true,$hotel2);
$room8= new Room("chambre 8","150€","1",true,$hotel2);
$room9= new Room("chambre 9","150€","1",false,$hotel2);
 
$client1= new Client ("Micka", "MURMANN");
$client2= new Client ("Virgile", "GIBELLO");

$reservation1= new Reservation($hotel1, $room1,"date");

echo "<strong>".$hotel1-> getInfoHotel()."</strong>";
    echo "Nombre de chambre: ".$hotel1->countRooms()."<br>";
    echo "Nombre de chambre réservées: ".$hotel1->countReservation()."<br>";
    echo "Nombre de chambre dispo: ".$hotel1->GetAvailable()."<br>"."<br>";

echo "<strong>".$hotel2-> getInfoHotel()."</strong>";
    echo "Nombre de chambre: ".$hotel2->countRooms()."<br>";
    echo "Nombre de chambre réservées: ".$hotel2->countReservation()."<br>";
    echo "Nombre de chambre dispo: ".$hotel2->GetAvailable()."<br>"."<br>";

echo "<strong>"."Reservation de ".$hotel1-> getName()."</strong>"."<br>";
    echo $client1-> GetInfoClient()." ".$room1 ->getRoom()." "."date"."<br>";
    echo $client2-> GetInfoClient()." ".$room3 ->getRoom()." "."date"."<br>"."<br>";

echo "<strong>"."Reservation de ".$hotel2-> getName()."</strong>"."<br>";
    echo $client1-> GetInfoClient()." ".$room7 ->getRoom()." "."date"."<br>";
    echo $client2-> GetInfoClient()." ".$room8 ->getRoom()." "."date"."<br>"."<br>";

echo "<strong>"."Reservation de". $client1 ->getInfoClient()."</strong>"."<br>";
    echo $hotel1->getName()." / ".$room1->getInfoRoom()."date"."<br>";
    echo $hotel2->getName()." / ".$room7->getInfoRoom()."date"."<br>"."<br>";

echo "<strong>"."Reservation de ". $client2 ->getInfoClient()."</strong>"."<br>";
    echo $hotel1->getName()." / ".$room3->getInfoRoom()."date"."<br>";
    echo $hotel2->getName()." / ".$room8->getInfoRoom()."date"."<br>"."<br>";

echo "<strong>"."Statuts des chambres de ". $hotel1->getName()."</strong>";

$prix = [
	"Chambre 1" => "200€",
	"Chambre 2" => "150€",
	"Chambre 6" => "150€",
	"Chambre 7" => "200€",
];

echo afficherTableHTML($prix);

function afficherTableHTML($prix){
ksort($prix);
	$result = "<table border=1>	
				<thead>	
					<tr>
						<th> Chambre </th>
						<th> Prix </th>
						<th> Wifi </th>
                        <th> Etat </th>
					</tr>
				</thead>
			<tbody>";
	foreach($prix as $room => $prix) {
		$result .= "<tr>
					<td>".ucfirst($room)."</td>
					<td>".ucfirst($prix)."</td>
                    <td>".ucfirst("Wifi")."</td>
                    <td>".ucfirst("date")."</td>
				</tr>";			
	}
	$result .= "</tbody></table>";
	return $result;
}