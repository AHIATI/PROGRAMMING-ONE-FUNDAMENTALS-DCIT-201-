<?php 
include ('userprofilesystem.php');

$user1 = new user ("Ahiati Emmanuel",26);
$user2 = new user ("Emmanuel Asiamah",12);

$user1->displayInfo();
echo $user1->isAdult();

$user2->displayInfo();
echo $user2->isAdult();



?>