<?php


require_once('animal.php');
require_once 'frog.php';
require_once 'ape.php';


$sheep = new Animal("shaun");
echo "Name :$sheep->name <br> " ; // "shaun"
echo "legs : $sheep->legs  <br>"; // 4
echo "cold blooded : $sheep->cold_blooded <br>"; // "no"
echo "<br>";

// Instance dari class Frog
$frog = new Frog("buduk");
echo " Name : $frog->name  <br>";         
echo " legs : $frog->legs  <br>";         
echo " cold blooded : $frog->cold_blooded <br>";
$frog->jump(); 
echo "<br>";                    

// Instance dari class Ape
$ape = new Ape("kera sakti");
echo " Name : $ape->name <br>";         
echo " legs : $ape->legs <br>";          
echo "cold blooded : $ape->cold_blooded <br>";  
$ape->yell();            

?>
