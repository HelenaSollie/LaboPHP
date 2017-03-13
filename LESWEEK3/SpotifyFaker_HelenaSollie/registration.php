
<?php

if(!empty($_POST)){

    $users = @new mysqli("localhost", "root", "root", "SpotifyFaker");


    $email = $_POST['email'];
    $username = $_POST['username'];
    $options = [
        'cost' => 12,
    ];

    $password = password_hash( $_POST['password'], PASSWORD_DEFAULT, $options );




    if(!empty($username) && !empty($email) && !empty($password)){

        $query_users = "INSERT INTO users (email, username , password) 
                        VALUES ('".$email."','".$password."','".$username."');";

        if( $users->query($query_users) ){

            session_start();

            $_SESSION['user'] = $email;
            header('Location: loggedin.php');
        }
        else {
            echo 'Failed to register';
        }
    } else {
        echo 'Failed to register';
    }
}

?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register for Spotify Faker!</title>


    <style>

        body {
            font-family: "Arial", sans-serif;
            background-image: url("http://wallpapercave.com/wp/WShsIJl.jpg");
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

        #registrationform {

            width:50%;
            margin-left:25%;
        }

        form #username, #password, #email {

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

    <h2>Join Spotify!</h2>
    <p>Registration is for free.</p>

</header>

<!-- REGISTRATIE FORMULIER -->
<div id="registrationform">

    <form action="" method="post">

        <input name="email" id="email" placeholder="E-mail" type="email"/>
        <input name="username" id="username" placeholder="Spotify Username" type="text"/>
        <input name="password" id="password" placeholder="Password" type="text"/>

        <input name="submit" id="button" value="Register" type="submit"/>


    </form>

</div>

<div id="registration">

    <p> Already have an account? <a href="index.php"> Login </a> right now!</p>

</div>

</body>
</html>