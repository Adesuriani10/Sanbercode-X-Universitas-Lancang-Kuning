<?php
require_once('Animal.php');
require_once('Ape.php');
require_once('Frog.php');

$sheep = new Animal ("shaun");

echo "Nama : " . $sheep->name. "<br>"; // shaun
echo "Legs : " . $sheep->legs. "<br>"; // 4
echo "Cold Blooded : " . $sheep->cold_blooded. "<br> <br>";// "no"

$frog = new Frog ("buduk");

echo "Nama : " . $frog ->name. "<br>"; // buduk
echo "Legs : " . $frog ->legs. "<br>"; // 4
echo "Cold Blooded : " . $frog ->cold_blooded. "<br> ";// "no"
echo "Jump:". $frog-> jump() . "<br> <br>"; //Hop Hop

$ape = new Ape ("kera sakti");

echo "Nama : " . $ape ->name. "<br>"; // kera sakti
echo "Legs : " . $ape ->legs. "<br>"; // 2
echo "Cold Blooded : " . $ape ->cold_blooded. "<br>";// "no"
echo "Yell:" . $ape-> yell().  "<br> <br>";
?>