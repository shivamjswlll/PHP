<?php

// !----------------------------------------------------------------CLASS,Constructor------------------------------------------------------------------------------------
// class Book{
//     public $title;
//     public $author;
//     public $price;

//     public function __construct($title,$author,$price){
//         $this->title = $title;
//         $this->author = $author;
//         $this->price = $price;
//     }

//     public function displayDetails(){
//         echo "Title: {$this->title} <br>";
//     }
    // --------------------------------------------------------------------INHERITANCE----------------------------------------------------------------------------------------------
    //parent class 
    class Vehicle{
        public $brand;
        public $model;

        public function __construct($brand, $model ){
        $this->brand = $brand;
        $this->model = $model;
        }

        public function describe(){
            echo "This is a {$this->brand} {$this->model},<br>";
        }
    }
    $vehicle= new Vehicle("Toyota","Camry");
    $vehicle->describe();
?>