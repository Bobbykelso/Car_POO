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
//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
//echo $bike->brake();

 //$tornado->forward();

/**
 * Voitures
 */
$homerPinkCar = new Cars('Pink', 4,'Diesel B7');
$margeCar = new Cars('Orange', 4,'Diesel B10');
$teenageCar = new Cars('Yellow', 4,'Diesel WTL');
$lilBanditCar = new Cars('Red', 4,'Essence E10');
$springfieldCar = new Cars('Black and white', 4,'Essence E5');
$flanderCar = new Cars('Turquoise', 4,'Essence E85');
$homerNewCar = new Cars('Yellow', 4,'Sams plomb95');
$plowCar = new Cars('Red', 4,'Sams plomb98');
$canyoneroCar = new Cars('Red', 4,'Diesel B10');
$krustyCar = new Cars('Blue', 4,'Essence E10');
$pattySelmaCar = new Cars('Gold', 4,'Sams plomb98');
$lovejoyCar = new Cars('White', 4,'Essence E5');



echo $margeCar->start();
echo $margeCar->forward();
echo $margeCar->brake();

echo $krustyCar->start();
echo $krustyCar->forward();
echo $krustyCar->brake();