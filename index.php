<?php

require_once './player.php';
require_once './inventory.php';
require_once './food.php';
require_once './drink.php';
require_once './tool.php';
require_once './medicine.php';

$barrita = new Food(1, 1, "Energy Bar", 30, 20, "meat");
$pollo = new Food(2, 3, "Chiken", 50, 60, "meat");;
$arroz = new Food(3, 5, "Rice", 25, 50, "plant");

$energuia = new Drink(1, 1, "Energy Drink", 30, 20, 250);
$agua = new Drink(2, 3, "Water", 50, 60, 250);;
$powerade = new Drink(3, 5, "PowerAde", 25, 50, 250);

$martillo = new Tool(2, 256, "Hammer", );
$espada = new Tool();
$pistola = new Tool();

$gasa = new Medicine(1, 1, "Gasas", 50, 0, 250);
$pilodra = new Medicine(1, 1, "Drug", 50, 0, 250);

$mochila = new Inventory(5, 5);

$maquinillas = new Player(100, 50, 50, $mochila, null, null, "Maquinillas");


echo '<pre>';
echo $maquinillas;
echo '<pre>';
