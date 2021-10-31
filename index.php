<?php

require_once './player.php';
require_once './inventory.php';
require_once './food.php';
require_once './drink.php';
require_once './tool.php';
require_once './medicine.php';

$barrita = new Food(1, 1, "Energy Bar", 30, 20, "meat");
$pollo = new Food(2, 3, "Chiken", 50, 60, "meat");
$arroz = new Food(3, 5, "Rice", 25, 50, "plant");

$energuia = new Drink(1, 1, "Energy Drink", 30, 20, 250);
$agua = new Drink(2, 3, "Water", 50, 60, 250);
$powerade = new Drink(3, 5, "PowerAde", 25, 50, 250);

$martillo = new Tool(2, 256, "Hammer", 50, true);
$espada = new Tool(3, 256, "Sword", 80, false);
$pistola = new Tool(2, 256, "Gun", 100, true);

$gasa = new Medicine(1, 1, "Gasas", 50, 0, 250);
$pilodra = new Medicine(1, 1, "Drug", 50, 0, 250);

$mochila = new Inventory(5, 5);

$player = new Player(100, 50, 50, $mochila, null, null, "Maravilla Navarro");

echo '<h2>';
echo 'Create Player';
echo '</h2>';

echo '<pre>';
echo $player;
echo '<pre>';

echo 'An enemy attacks our player with a ' . $espada->getName();

$player->injury($espada->attack());

echo '<h4>';
echo 'Check HP';
echo '</h4>';

echo '<pre>';
echo $player ->getHealth() . ' HP';
echo '<br>';
echo $player->healthCheck();
echo '<pre>';
