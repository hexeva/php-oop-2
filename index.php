<?php 
require_once __DIR__ . '/Instrument.php';
require_once __DIR__ . '/Guitars.php';
require_once __DIR__ . '/Keyboards.php';
require_once __DIR__ . '/Customer.php';





$keyboard_roland = new Keyboards('ROLAND','keyboard',2000);
var_dump($keyboard_roland);

$guitar_telecaster = new Guitars('FENDER','guitar',1800,'electric');
var_dump($guitar_telecaster);

$customer_one = new Customer('Ettore','Rossi','ettorino@email.it');
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