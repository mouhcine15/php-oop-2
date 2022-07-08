<?php
include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/Cibo.php';
include __DIR__ . '/classes/Giochi.php';
include __DIR__ . '/classes/Cuccie.php';

$food = new Cibo('Croccantini', 20.00, 'Cani', 2023);
var_dump($food);

$toy = new Giochi('Pallina', 10.00, 'Gatti', 'Gomma');
var_dump($toy);

$home = new Cuccie('Cuccia', 50.00, 'Cani', 0.6);
var_dump($home);