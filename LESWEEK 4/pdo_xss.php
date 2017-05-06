<?php

    $conn = new PDO('mysql:host=localhost; dbname=SpotifyFaker', 'root', 'root');

    //Try Catch blok

    try {


        if(!empty($_POST)) {

            $conn = new PDO('mysql:host=localhost; dbname=SpotifyFaker', 'root', 'root');
            $name = $_POST['name'];
            $statementInsert = $conn->prepare("insert into artists (name) values (:name)");
            $statementInsert->bindValue(":name", $name);
            $res = $statementInsert->execute();
            var_dump($res);
        }

        //Alle artists

        $statementAllArtists = $conn->prepare("select * from artists");
        $statementAllArtists->execute();

    }

    catch(PDOException $e) {

        echo $e->getMessage();


    }



?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">

        <label for="name">Artist name</label>
        <input type="text" id="name" name="name">

        <input type="submit" value="Save artist">


    </form>

    <?php while( $artist = $statementAllArtists->fetch(PDO::FETCH_ASSOC)): ?>

        <div>

            <!-- htmlspecialchars gaat hij tekens zoals < , > ...  negeren -->

            <h1><?php echo htmlspecialchars($artist['name']); ?></h1>

        </div>



    <?php endwhile; ?>

</body>
</html>