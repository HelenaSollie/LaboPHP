<?php

    class Van extends Vehicle {

        private $capacity;

        /**
         * @return mixed
         */
        public function getCapacity()
        {
            return $this->capacity;
        }

        /**
         * @param mixed $capacity
         */
        public function setCapacity($capacity)
        {
            $this->capacity = $capacity;
        }

        public function __toString()
        {
            $output = parent::__toString();
            $output.=" -" . "<span>" . $this->getCapacity() . " kg</span>";
            return $output;

        }

        public function save() {

            $conn = Db::getInstance();
            $query = $conn->prepare("INSERT INTO vans(brand, price, capacity) 
                                     VALUES (:brand, :price, :capacity)");
            $query->bindValue(":brand", $this->getBrand());
            $query->bindValue(":price" , $this->getPrice());
            $query->bindValue(":capacity" , $this->getCapacity());



            var_dump($query->execute());
            print_r($query->errorInfo());

        }


    }