<?php

    session_start();

    if(isset($_POST['submit'])){
    checkInfo();
    };

    function checkInfo(){

        $naam = $_POST['naam'];

        $paswoord = $_POST['paswoord'];

        $email = $_POST['email'];


    if( !empty($naam) && !empty($paswoord) && !empty($email) ){

        validation();
    }

    else {

        echo '<p id="false"> You forgot something... </p>';
    }
};

    function validation(){

        $user = $_POST['email'];
        $_SESSION['user'] = $user;

    header('location: loggedin.php');
};

?><!doctype html>
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

        form {

            background-color: lightsteelblue;
            padding: 20%;
        }

        form #naam,
            #email,
            #paswoord {
            width: 70%;
            margin-left:15%;
            padding: 5%;
        }

        form #login {

            margin-left:50%;
            margin-top:10%;
            width:20%;
        }

        #false {


            font-family: "Arial", sans-serif;
            font-size:1.2em;
            color: white;

            text-align: center;
            background-color: pink;
            padding: 5%;


        }

    </style>



</head>

<body>

    <header>
        <h1> Welkom op IMD-talks!</h1>
    </header>

    <form action="" method="post">


            <input name="naam" id="naam" type="text" placeholder="Voornaam">
            <input name="paswoord" id="paswoord" type="password" placeholder="Paswoord">
            <input name="email" id="email" type="mail" placeholder="E-mail">

            <input name="submit" id="login" type="submit" value="Go!">


    </form>



</body>
</html>