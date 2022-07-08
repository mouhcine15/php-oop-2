<?php
include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/Cibo.php';
include __DIR__ . '/classes/Giochi.php';

$food = new Cibo('Croccantini', 20.00, 'Cani', 2023);
var_dump($food);

$toy = new Giochi('Pallina', 10.00, 'Gatti', 'Gomma');
var_dump($toy);