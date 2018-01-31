<?php
include "zoo/cat.php";
use zoo\Cat;

$cat = new Cat("loulou", "Royal Canin", ["gris", "white"], true);
var_dump($cat);
echo "<br>";
echo $cat->get_legs();
echo "<br>";
echo $cat->eat();
echo "<br>";
echo $cat->meaw();
echo "<br>";
$cat->domesticated();
var_dump($cat);