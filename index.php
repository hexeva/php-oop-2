<?php 
require_once __DIR__ . '/Instrument.php';
require_once __DIR__ . '/Guitars.php';
require_once __DIR__ . '/Keyboards.php';
require_once __DIR__ . '/Customer.php';





$keyboard_roland = new Keyboards('ROLAND','keyboard',2000);

$keyboard_yamaha = new Keyboards('YAMAHA','Keyboards',1700);
// var_dump($keyboard_roland);
// var_dump($keyboard_yamaha);


$guitar_telecaster = new Guitars('FENDER','guitar',1800,'electric');
// var_dump($guitar_telecaster);

$guitar_lespaul = new Guitars('GIBSON','guitar',2500,'electric');

$customer_one = new Customer('Ettore','Rossi','ettorino@email.it');
$customer_one->addProduct($guitar_lespaul);
$customer_one->addProduct($keyboard_roland);
$customer_one->addProduct($guitar_telecaster);

var_dump($customer_one);

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

    
</body>
</html>