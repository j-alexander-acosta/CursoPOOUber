<?php
require_once('car.php');
require_once("uberX.php");
require_once("uberPool.php");
require_once('account.php');

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AMS123"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

$uberPool = new uberPool("TYU567", new Account("Andrea Ferran", "ANDA756"), "Dodge", "Attitude");
$uberPool->printDataCar();

$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();
?>