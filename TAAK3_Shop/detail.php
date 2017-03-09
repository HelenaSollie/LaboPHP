<?php

    session_start();

    include_once'products.inc.php';


    $productdetail = $_GET['productdetail'];

        if(isset($_POST['kopen'])){

            koopProduct();
        }
        else {

        }

        function startsessie(){

         $productdetail = $_GET['productdetail'];
         $_SESSION['mandje'][] = $productdetail;
        }


?> <!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extra info</title>

</head>
<body>

    <div id="info">

            <h3><?php echo $products[$productdetail]['name'] . " " . "€" . $products[$productdetail]['price']; ?></h3>
            <img src="<?php echo $product[$productdetail]['image'];?>">

            <input type="submit" value="Voeg toe aan winkelmandje" name="kopen">

    </div>

    <section id="mandje">

        <?php include_once('cart.inc.php')?>

    </section>

</body>
</html>