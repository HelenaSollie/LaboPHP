<?php

 /*class Artist {

 //incapselen; alles private zetten

    private $m_sname;
    private $m_iyear;

    public function __construct($p_sName , $p_iYear)
    {
        if ( $p_iYear > date("Y")) {
            echo "Year must be max 2017";
        } else {
            $this->m_iyear= $p_iYear;
        }

        $this->m_sname = $p_sName;

    }

    public function __construct()
    {

    }



    public function setName($p_sName)
    {
        if( empty($p_sName)) {
            throw new Exception("Name cannot be an exception");
        } else {
            $this->m_sname = $p_sName;
        }

    }

    public function getName() {
        return $this->m_sname;
    }

}*/

//classes worden niet afgesloten


// werken met setters en getters:

/**
 * @property  Name
     */
class Artist {

       private $m_sName;
       private $m_sEmail;

       public function __set($p_sProperty, $p_vValue)
       {
           switch ($p_sProperty) {
               case "Name";
               if($p_vValue == "") {
                        throw new Exception("Name cannot be empty");
                    }
               $this->m_sName = $p_vValue;
               break;

               case "Email";
                   if($p_sProperty == "") {
                       throw new Exception("Name cannot be empty");
                   }
               $this->m_sEmail = $p_sProperty;
               break;
           }
       }

       public function __get($p_sProperty)
       {
           switch ($p_sProperty) {
               case "Name";
               return $this->m_sName;
               break;

               case "Email";
               return $this->m_sEmail;
               break;
           }
       }

       public function __toString()
       {
           $output ="<h2>". $this->m_sName . "</h2>";
           $output.="<p>Email: " . $this->m_sEmail . "</p>";
           return $output;

       }

       public function Save() {

           //conn PDO

           $conn = new PDO("mysql:host=localhost; dbname=SpotifyFaker", "root", "root");

           //statement: INSERT query

           $statement = $conn->prepare("INSERT INTO artists (name) VALUES (:name)");
           $statement->bindValue(":name", $this->m_sName);

           // execute statement

           $res = $statement->execute();

           //gelukt of niet?
            return $res;


       }

    }

