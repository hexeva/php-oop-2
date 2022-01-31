<?php 
require_once __DIR__ . '/Instrument.php';
require_once __DIR__ . '/Guitars.php';
require_once __DIR__ . '/Keyboards.php';
require_once __DIR__ . '/Customer.php';





$keyboard_roland = new Keyboards('ROLAND','keyboard',2000);

$keyboard_yamaha = new Keyboards('YAMAHA','Keyboards',1700);
// var_dump($keyboard_roland);
// var_dump($keyboard_yamaha);


$guitar_telecaster = new Guitars('FENDER','guitar',1300,'electric');
// var_dump($guitar_telecaster);




$guitar_lespaul = new Guitars('GIBSON','guitar',2500,'electric');

$customer_one = new Customer('Ettore','Rossi','ettorino@email.it');
$customer_one->addProduct($guitar_lespaul);
$customer_one->addProduct($keyboard_roland);
$customer_one->addProduct($guitar_telecaster);

$customer_cart = $customer_one->getShoppingCart();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>WELCOME 
        <span>
            <?php echo $customer_one->getName(); ?>
        </span> 

        ecco il suo carrello:
    </h1>

    <?php foreach($customer_cart as $item){ ?>

        <div class="cart">
            <div class="single-product">
                <h2>Marca : <?php echo $item->brand; ?></h2>
                <h3>categoria: <?php echo $item->type; ?></h3>
                <h3>Prezzo: <?php echo $item->price;?> </h3>
            </div>
        </div>

  <?php } ?>

   
</div>

    
</body>
</html>