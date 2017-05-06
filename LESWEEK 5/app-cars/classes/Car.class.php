<?php

    class Car extends Vehicle {

        public function save() {

            $conn = Db::getInstance();
            $query = $conn->prepare("INSERT INTO vans(brand, price) 
                                     VALUES (:brand, :price)");
            $query->bindValue(":brand", $this->getBrand());
            $query->bindValue(":price" , $this->getPrice());



            var_dump($query->execute());
            print_r($query->errorInfo());

        }
    }