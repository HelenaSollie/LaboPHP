<?php

    class Db {

        /*public static function test() {
            echo "hallo";
        }*/

        private static $conn = NULL;

        public static function getInstance() {

            if (isset(self::$conn)) {

                //er is een connectie, geef ze gewoon terug!
                return self::$conn;
            }
            else {
                // er is nog geen connectie, maak aan en geef terug
                self::$conn = new PDO("mysql:host:localhost; dbname=voertuig", "root", "root");
                return self::$conn;
            }

        }
    }