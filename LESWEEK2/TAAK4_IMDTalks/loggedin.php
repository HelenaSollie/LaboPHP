<?php


    session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IMD TALKS</title>


    <style>

        header {

            color: white;
            font-family: "Arial", sans-serif;

            background-color: cadetblue;
            padding: 5%;

            text-align: center;

        }

        header a {

            text-decoration: none;
            border: solid 2px pink;
            border-radius: 10px;
            padding: 2%;
            color: white;

        }

        #welkom {

            padding:20%;
            background-color: pink;
            color: white;

            font-family: "Arial", sans-serif;
            font-size: 3em;
            text-align: center;

        }



    </style>



</head>

<body>

<header>
    <h1> Welkom op IMD-talks!</h1>

    <a href="logout.php">Log out</a>

</header>

<section id="welkom">

    <p>Welcome back <?php echo $_SESSION['user']; ?></p>

</section>




</body>
</html>