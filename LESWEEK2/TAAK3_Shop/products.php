<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producten</title>

    <style>

        header {

            font-family: "Amatic", sans-serif;
            font-size: 1.5em;
            width: 100%;
            background-color: lightpink;
            padding: 5%;
            color: white;
            text-align: center;

        }

        nav {

            width:80%;
            margin-left:10%;
        }

        nav ul li h3 {

            font-family: "Amatic", sans-serif;
            font-size: 3em;
        }

        nav ul li img {

            width:30%;
            border: solid 2px cornflowerblue;
            border-radius: 10px;
            padding:5%;
        }

        nav ul li a {

            font-family: "Georgia", sans-serif;
            font-size: 1.5em;
            color: darkseagreen;
            text-decoration: none;
            margin-left: 10%;

        }




    </style>




</head>
<body>

        <header>

            <h1>Mijn verlanglijstje!</h1>

        </header>

        <?php include ('products.inc.php') ?>

        <?php foreach ($products as $p => $product): ?>
            <nav>
                <ul>
                    <li>
                        <h3><?php echo $product['name'] . " " . "€" . $product['price']; ?></h3>

                        <img src="<?php echo $product['image'];?>">

                        <a href="detail.php?product=<?php print $p; ?>"> Meer info!  </a>

                    </li>
                </ul>
            </nav>




        <?php endforeach; ?>

</body>
</html>