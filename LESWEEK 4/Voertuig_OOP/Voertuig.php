<?php

    include_once ("index.php");

    // superklasse

    class Voertuig {

        private $m_sMerk;
        private $m_iAantalPassagiers;
        private $m_iAantalDeuren;


        // constructor

        public function __construct()

        {

            $this -> $m_sMerk = $_POST['Merk'] ;
            $this -> $m_iAantalPassagiers = $_POST['Passagiers'] ;
            $this -> $m_iAantalDeuren = $_POST ['Deuren'];

        }

        // setter

        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty) {

                case 'Merk':
                    $this -> $m_sMerk = $p_vValue;
                    break;

                case 'AantalPassagiers':
                    $this -> $m_iAantalPassagiers = $p_vValue;
                    break;

                case 'AantalDeuren':
                    $this -> $m_iAantalDeuren = $p_vValue;

            }


        }

        // getter

        public function __get($p_sProperty)
        {
            switch ($p_sProperty) {

                case 'Merk':
                    return($this->m_sMerk);
                    break;

                case 'AantalPassagiers':
                    return($this->m_iAantalPassagiers);
                    break;

                case 'AantalDeuren':
                    return($this->m_iAantalDeuren);
                    break;
            }

        }

        // reserveer functie

        public function Reserveer() {

            $reserv = "Merk: " . $this->m_sMerk . "</br>" . "Aantal Passagiers: " . $this->m_iAantalPassagiers . "</br>"
            . "Aantal Deuren: " . $this-> m_iAantalDeuren . "</br>";

            echo $reserv;

        }
    }








