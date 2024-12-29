<?php

require_once 'LuxuryCar.php';

$sportsCar = new SportsCar("Ferrari", "F8 Tributo", 340);
echo $sportsCar->getDetails() . PHP_EOL . '<br>'. '<br>';
echo $sportsCar->drive() . PHP_EOL . '<br>'. '<br>';

$luxuryCar = new LuxuryCar("Rolls Royce", "Phantom", 250, 120000000, "High");
echo $luxuryCar->getLuxuryDetails() . PHP_EOL  . '<br>'. '<br>';
echo $luxuryCar->drive() . PHP_EOL . '<br>'. '<br>'; 
