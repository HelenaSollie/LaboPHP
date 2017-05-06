<?php


    include_once ("Voertuig.php");
    include_once ("Vrachtwagen.php");
    include_once ("Sportwagen.php");


    try {
    if (!empty($_POST)) {

        $reserv = new Voertuig();
        $reserv -> Merk = $_POST['Merk'];
        $reserv -> AantalPassagiers = $_POST['Passagiers'];
        $reserv -> AantalDeuren = $_POST ['Deuren'];

        echo $reserv -> Reserveer();


    }
    } catch(Exception $e) {

    $error = $e->getMessage();

    }


?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        
        body {
            background-image: url("http://68.media.tumblr.com/d1dd973d8899c45a5e4cd5d5aca815aa/tumblr_nnshumSpOL1s36w6uo1_1280.jpg");
            background-repeat: no-repeat;
        }

        form {
            width: 70%;
            margin-left: 15%;
            margin-top: 5%;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 2em;
        }

        form label {

            display: flex;
            padding: 2%;
            color: white;
        }

        form #Merk , #Passagiers , #Deuren {
            padding: 2%;
            border-radius: 10px;
            background-color: transparent;
            color: white;
        }

        form button {
            padding: 2%;
            color: white;
            background-color: darkred;

        }


    </style>


</head>
<body>

        <form action="" method="post">

            <label for="Merk">Merk</label>
            <input name="Merk" id="Merk" type="text">

            <label for="Passagiers">Aantal Passagiers</label>
            <input name="Passagiers" id="Passagiers" type="text">

            <label for="Deuren">Aantal Deuren</label>
            <input name="Deuren" id="Deuren" type="text">

            <button type="submit">Reserveer</button>

        </form>

</body>
</html>
