<?php

$link = basename($_SERVER['SCRIPT_NAME'],'.php')

?>

<style>

    nav {

        background-color: ghostwhite;
        padding: 5%;

    }

    nav a {
        text-decoration: none;
        font-family: 'Arial', sans-serif;
        font-size: 2em;
        padding:5%;
        text-align: center;
        color: #FF6766;
    }

    .selected {
        color: white;
        background-color: red;
    }

</style>


<nav>
    <a <?php if($link == "home"): ?> class="selected" <?php endif ?>href="home.php">Home</a>
    <a>Profile</a>
    <a>Pins</a>
    <a <?php if($link == "contact"): ?> class="selected" <?php endif ?> href="contact.php">Contact</a>
</nav>