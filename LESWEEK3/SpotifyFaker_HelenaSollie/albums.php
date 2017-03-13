<?php

    session_start();
    $conn_spotify = @new mysqli("localhost", "root", "root", "SpotifyFaker");
    $artistid=$_GET['artistid'];

    $query = "SELECT * FROM albums WHERE (artist_id = '".$artistid."');";
    $result = $conn_spotify->query( $query );

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Albums</title>

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

        header a {
            text-decoration: none;
            text-transform: uppercase;
            color: white;
            background-color:darkseagreen;
            border-radius: 10px;
            padding: 5%;
            margin-left: -10%;
        }

        #albums {
            background: darkseagreen;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            color: white;

        }

        #albums img {
            width:50%;
            padding: 2%;
        }

        #albums a {
            font-size: 1.5em;
            text-decoration: none;
            color: mediumseagreen;
            text-transform: uppercase;
        }

    </style>


</head>
<body>

    <header>

    <a href="logout.php">Log out</a>

    <h1>More albums over here!</h1>

    </header>

    <div id="albums">

        <?php

        while( $row = mysqli_fetch_array($result) ){

            echo '<div class="artist">';
            echo "<img src='".$row['cover']."' alt='coveralbum'>";
            echo "<a class='artist_name' href='tracks.php?albumid=".$row['id']."'>".$row['title']."</a>";
            echo "<h3>".$row['description']."</h3>";
            echo '</div>';
            }
    ?>
    </div>

</body>
</html>