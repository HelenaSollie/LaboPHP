<?php

    session_start();

    $connection = @new mysqli("localhost", "root", "root" , "SpotifyFaker");

    $album_id = $_GET['albumid'];
    $query = "SELECT * FROM tracks WHERE (album_id = '".$album_id."');";

    $result = $connection->query($query);


?> <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracks</title>

    <style>

        body {

            font-family: "Arial", sans-serif;
            background-image: url("https://zobow.files.wordpress.com/2013/11/cnv00008.jpg");
        }

        header {

            background-color: transparent;
            color: mediumseagreen;
            font-size: 1.5em;
            display: flex;
            justify-content: center;
            padding: 5%;
        }

        #tracks {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            color: white;

        }

        header a {
            text-decoration: none;
            text-transform: uppercase;
            color: white;
            background-color:darkseagreen;
            border-radius: 10px;
            padding: 5%;
            margin-left: -10%;
        }


    </style>

</head>
<body>

    <header>

        <a href="logout.php">Log out</a>
        <h1>Tracks tracks tracks...</h1>

    </header>

    <div id="tracks">

    <?php

    while( $row = mysqli_fetch_array($result) ){

        echo "<p>".$row['title']."</p>";
    }
    ?>
    </div>

</body>
</html>

