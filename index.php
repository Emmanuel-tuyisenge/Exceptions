<?php


require_once 'Car.php';
require_once 'Vehicle.php';

$megane = new Car('white', 5, 'fuel', true);

try{
    $megane->start();
} catch (Exception $exception){
    echo $exception;
    $megane->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}