<?php
require 'class.php';

$car = new Car('Red', '4', 'gasoil');
echo $car->start('100') . "<br>";
echo $car->forward();
echo $car->brake();
