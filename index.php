<?php
include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/Cibo.php';
include __DIR__ . '/classes/Giochi.php';
include __DIR__ . '/classes/Cuccie.php';
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/UserLog.php';


$food = new Cibo('Croccantini', 20.00, 'Cani', 2023);
// var_dump($food);

$toy = new Giochi('Pallina', 10.00, 'Gatti', 'Gomma');
// var_dump($toy);

$home = new Cuccie('Cuccia', 50.00, 'Cani', 0.6);
// var_dump($home);

// $user = new User('Mario', 'Bianchi', 'mario@mail.com');
// var_dump($user);

$userLog = new UserLog('Marco', 'Rossi', 'marco@mail.com');
// var_dump($userLog);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>
           <?= $food->nome ?>
        </h3>
        <div>
            Prezzo: <?= $food->price ?>€
        </div>
        <div>
            Per: <?= $food->animal ?>
        </div>
        <div>
            data di scadenza: <?= $food->scadenza?>
        </div>
        <div>
            Sconto: <?= $userLog->sconto ?>
        </div>
        
    </div>
    <div>
        <h3>
           <?= $toy->nome ?>
        </h3>
        <div>
            Prezzo: <?= $toy->price ?>€
        </div>
        <div>
            Per: <?= $toy->animal ?>
        </div>
        <div>
            Materiale: <?= $toy->materiale?>
        </div>
        <div>
            Sconto: <?= $userLog->sconto ?>
        </div>
    </div>
    <div>
        <h3>
           <?= $home->nome ?>
        </h3>
        <div>
            Prezzo: <?= $home->price ?>€
        </div>
        <div>
            Per: <?= $home->animal ?>
        </div>
        <div>
            Grandezza: <?= $home->materiale ?>m^2
        </div>
        <div>
            Sconto: <?= $userLog->sconto ?>
        </div>
        
    </div>
</body>
</html>