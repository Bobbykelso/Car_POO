<?php

require_once "src/Bicycle.php";
require_once "src/Cars.php";
/**
 * Bikes
 */

$bike = new Bicycle('blue');
$rockrider = new Bicycle('yellow');
$tornado = new Bicycle('black');


// //Nouvelles valeurs affectés dans index.php
// $bike->color = 'blue';
//$bike->currentSpeed = 0;
// $rockrider->color = 'yellow';
// $tornado->color = 'black';
// var_dump($tornado);

// // Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

/**
 * Voitures
 */

$margeCar = new Cars('Orange', 4,'Diesel B10');
$krustyCar = new Cars('Blue', 4,'Essence E10');



echo $margeCar->start();
echo '<br> Vitesse de la voiture : ' . $margeCar->getSpeed() . ' km/h' . '<br>';
echo $margeCar->forward();
echo '<br> Vitesse de la voiture : ' . $margeCar->getSpeed() . ' km/h' . '<br>';
echo $margeCar->brake();
echo '<br> Vitesse de la voiture : ' . $margeCar->getSpeed() . ' km/h' . '<br>';

echo $krustyCar->start();
echo '<br> Vitesse de la voiture : ' . $margeCar->getSpeed() . ' km/h' . '<br>';
echo $krustyCar->forward();
echo '<br> Vitesse de la voiture : ' . $margeCar->getSpeed() . ' km/h' . '<br>';
echo $krustyCar->brake();
echo '<br> Vitesse de la voiture : ' . $margeCar->getSpeed() . ' km/h' . '<br>';