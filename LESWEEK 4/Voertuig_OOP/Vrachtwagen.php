<?php

    include_once ("Voertuig.php");

    class Vrachtwagen extends Voertuig {

        private $m_iMaxLast;


        public function __construct($p_iMaxLast)
        {
            $this->m_iMaxLast = $p_iMaxLast;
        }






// setter

public function __set($p_sProperty, $p_vValue)
{
    switch($p_sProperty) {

        case 'MaxLast':
            $this -> $m_iMaxLast = $p_vValue;

    }


}

// getter

public function __get($p_sProperty)
{
    switch ($p_sProperty) {

        case 'MaxLast':
            return($this->m_iMaxLast);
            break;
    }

}

// reserveer functie

public function Reserveer() {

    $reserv = "MaxLast" . $this->m_iMaxLast;

    echo $reserv;

}


    }