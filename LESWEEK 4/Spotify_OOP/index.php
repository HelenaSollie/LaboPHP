<?php

//OOP zorgt voor abstractie, encapsulation (getters en setters), inheritance en polymorphism

    /*try {

        include_once("classes/Artist.php");

        $artist1 = new Artist("Bloc Party", 2000);
        $artist1->setName("Bloc Party");

        echo $artist1->getName();

        $artist2 = new Artist();
        $artist2->setName("");

    }
    catch ( Exception $e ) {
        $error = $e-> getMessage();
    }*/

    /* try {
        include_once("classes/Artist.php");
        $a = new Artist();
        $artist->Name = "Bloc Party";
        $artist->Email = "bloc@party.com";

        echo $artist->Name;
    } catch (Exception $e) {

        $error = $e->getMessage();

    }*/

    include_once ("classes/Artist.php");
    include_once ("classes/ArtistVIP.php");

    $vip = new ArtistVIP();
    $vip->Name="Alles";
    echo $vip= "Name";


    try {
        if (!empty($_POST)) {

            $artist = new Artist();
            $artist->Name = $_POST['name'];

            if($artist->Save()) {
                //ok

                $success = "The artist has been saved.";

            } else {
                //niet oke

                $error = "Whoops, something went wrong.";
            }
        }
    }

    catch(Exception $e) {

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

        .alert {
            padding:0.3em;
            border-radius: 5px;
        }

        .alert-danger {
            background-color:red;
            color: white;
            display: inline-block;
        }

        .alert-success {
            background-color:green;
            color: white;
            display: inline-block;
        }



    </style>
</head>
<body>

    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo "error" ?></div>
    <?php endif; ?>

    <?php if (isset($success)): ?>
        <div class="alert alert-success"><?php echo "success" ?></div>
    <?php endif; ?>

    <form action="" method="post">

        <label for="name">Artist name</label>
        <input type="text" id="name" name="name">

        <label for="rider">Rider?</label>
        <input type="text" id="rider" name="rider">

        <button type="submit">Save artist</button>


    </form>



</body>
</html>