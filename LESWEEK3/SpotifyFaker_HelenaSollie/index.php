<?php

        if(!empty ($_POST)) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $users = @new mysqli("localhost", "root", "root", "SpotifyFaker");
            $query = "SELECT * FROM users
                      WHERE (username = '".$users->real_escape_string($username)."');";

            $res = $users->query($query);
            $user = $res->fetch_assoc();

            if(password_verify($password, $user['password'])) {
                header('Location: loggedin.php');
            } else {

                echo 'not found';

            }
        }


?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotify Faker</title>


    <style>

        body {
            font-family: "Arial", sans-serif;
            background-image: url("https://zobow.files.wordpress.com/2013/11/cnv00008.jpg");
        }

        header {
            width:50%;
            margin-left:25%;
            margin-top:10%;
            display: flex;
            flex-direction:column;
        }

        header h2 {

            font-size: 3.5em;
            color: mediumseagreen;
        }

        header p {

            font-size: 2em;
            color: slategrey;
            margin-top: -5%;
        }

        #loginform {

            width:50%;
            margin-left:25%;
        }

        form #username, #password {

            width: 50%;
            margin-left: 7.5%;
            padding: 5%;
            margin-top: 3%;
            border-radius: 5px;
            background-color: transparent;
            color: mediumseagreen;
            font-size: 1em;
        }

        form #button {

            width: 30%;
            margin-left: 22.5%;
            padding: 2%;
            margin-top: 3%;
            border-radius: 5px;
            background-color: mediumseagreen;
            color: white;
            font-size: 0.8em;

        }

        #registration p {

            font-size: 1.5em;
            color: white;
            width:50%;
            margin-left: 25%;
            margin-top: 5%;
        }

        #registration p a {

            text-decoration: none;
            color: lawngreen;
        }

    </style>
</head>

<body>
        <header>

            <h2>Get the right music, right now</h2>
            <p>Listen to millions of songs for free.</p>

        </header>

        <!-- LOGIN FORMULIER -->
        <div id="loginform">

        <form action="" method="post">

            <input name="username" id="username" placeholder="Spotify Username" type="text"/>
            <input name="password" id="password" placeholder="Password" type="text"/>

            <input name="submit" id="button" value="LOGIN" type="submit"/>


        </form>

        </div>

        <div id="registration">

            <p> Don't have an account yet? <a href="registration.php"> Sign up </a> right now!</p>

        </div>

</body>
</html>
