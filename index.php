<?php

require_once './player.php';
require_once './inventory.php';
require_once './food.php';
require_once './drink.php';
require_once './tool.php';
require_once './medicine.php';

$barrita = new Food(1, 0, "Energy Bar", 30, 20, "meat");
$pollo = new Food(2, 0, "Chicken", 50, 60, "meat");
$arroz = new Food(3, 0, "Rice", 25, 50, "plant");

$energuia = new Drink(1, 0, "Energy Drink", 30, 20, 250);
$agua = new Drink(2, 0, "Water", 50, 60, 250);
$powerade = new Drink(3, 0, "PowerAde", 25, 50, 250);

$martillo = new Tool(2, 0, "Hammer", 50, true);
$espada = new Tool(3, 0, "Sword", 80, false);
$pistola = new Tool(2, 0, "Gun", 100, true);

$gasa = new Medicine(1, 0, "Gasas", 50);
$pilodra = new Medicine(1, 0, "Drug", 75);

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

echo 'Take ' . $pollo->getName() . ' and ' . $energuia->getName();
$player->eat($pollo->getFoodUp(), $pollo->getHealthUp());
$player->drink($energuia->getDrinkUp(), $energuia->getHealthUp());

echo '<pre>';
echo $player;
echo '<pre>';

echo 'An enemy attacks our player with a ' . $martillo->getName();

$player->injury($martillo->attack());

echo '<pre>';
echo $player->getHealth() . ' HP';
echo '<br>';
echo $player->healthCheck();
echo '<pre>';

echo 'Take ' . $pilodra->getName();

$player->takeMedicine($pilodra->getHealthUp());

echo '<pre>';
echo $player->getHealth() . ' HP';
echo '<br>';
echo $player->healthCheck();
echo '<pre>';

echo '<h2>';
echo 'Create bag';
echo '</h2>';

// echo '<pre>';
// echo $mochila->getItemList();
// echo '<pre>';

$mochila->add($pollo);
$mochila->add($powerade);
$mochila->add($arroz);

echo '<pre>';
echo $mochila->getItemList();
echo '<pre>';

$player->moveToHand('right', $powerade);

echo '<pre>';
echo $player;
echo '<pre>';

$player->swapHands();

echo '<pre>';
echo $player;
echo '<pre>';

echo '----------------------------------------';
echo '<br>';

$mochila->remove($pollo);

echo '<pre>';
echo $mochila->getItemList();
echo '<pre>';

$player->searchInventory($pollo);

// $mochila->reordenar();

// echo '<pre>';
// echo $mochila->getItemList();
// echo '<pre>';
