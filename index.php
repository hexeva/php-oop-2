<?php 
require_once __DIR__ . '/Instrument.php';
require_once __DIR__ . '/Guitars.php';
require_once __DIR__ . '/Keyboards.php';




$keyboard = new Keyboards('ROLAND','keyboard',2000);
var_dump($keyboard);

$guitar = new Guitars('FENDER','guitar',1800);
var_dump($guitar);

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