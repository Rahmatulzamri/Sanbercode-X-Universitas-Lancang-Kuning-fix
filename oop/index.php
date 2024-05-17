<?php
require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>"; 
echo "Legs : " . $sheep->legs . "<br>"; 
echo "cold blooded : " . $sheep->cold_blooded . "<br><br>"; 

$frog = new Frog("buduk");

echo "Name : " . $frog->name . "<br>"; 
echo "Legs : " . $frog->legs . "<br>"; 
echo "cold blooded : " . $frog->cold_blooded . "<br>"; 
echo $frog->jump() . "<br><br>"; 

$ape = new Ape("Kera sakti");

echo "Name : " . $ape->name . "<br>"; 
echo "Legs : " . $ape->legs . "<br>"; 
echo "cold blooded : " . $ape->cold_blooded . "<br>"; 
echo "Yell : " . $ape->yell(); 
?>

