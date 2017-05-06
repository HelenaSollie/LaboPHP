<?php

    abstract class Vehicle {

        private $brand;
        private $price;

        /**
         * @return mixed
         */
        public function getBrand()
        {
            return $this->brand;
        }

        /**
         * @param mixed $brand
         */
        public function setBrand($brand)
        {
            $this->brand = $brand;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        /**
         * @param mixed $price
         */
        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function __toString()
        {
            $output = "<span>" . $this->getBrand() . " - " . $this->getPrice() . " euro</span>";
            return $output;
        }


    }