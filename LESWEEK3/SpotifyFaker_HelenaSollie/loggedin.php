<?php

    session_start();
    $connection = @new mysqli("localhost", "root", "root", "SpotifyFaker");
    $query = "SELECT * FROM artists;";
    $result = $connection->query( $query );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spotify Faker</title>

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

        #artists {
            display: flex;
            flex-direction: column;
            justify-content: space-around;

        }

        #artists img {
            width:50%;
            padding: 2%;
        }

        #artists a {
            font-size: 1.5em;
            text-decoration: none;
            color: mediumseagreen;
            text-transform: uppercase;
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

    <header>

        <a href="logout.php">Log out</a>
        <h1>Choose your favourite artists!</h1>

    </header>

    <div id="artists">

    <?php

        while( $row = mysqli_fetch_array($result) ){

        echo '<div class="artist">';
        echo '<img src="https://static1.squarespace.com/static/518c10f0e4b03bb726afb55b/t/529f947fe4b00096a05e7484/1386189986090/SP-Website-Music-Editing-Thumbnail.png" alt="thumbnail">';
        echo "<a class='artist_name' href='albums.php?artistid=".$row['id']."'>".$row['name']."</a>";
        echo '</div>';
    }
    ?>

    </div>

</body>
</html>