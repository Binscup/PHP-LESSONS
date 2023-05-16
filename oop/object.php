<?php
    class dealerCar
    {
        public $nameCar;
        public $capacity;

        function buyCar()
        {
            echo "Mobil tersedia,silahkan beli.";
        }        
        function typeCar()
        {
            echo " Tersedia pilihan tipe mobil";
        }
    }
    $buy = new dealerCar();
    $buy->buyCar();
    $buy->nameCar = "Mustang classic";
    echo "<br>";
    $buy->capacity = 2;
    echo "<br>";
    echo "berhasil membeli ". $buy->nameCar. 'dengan kapasitas'. $buy->capacity;
    echo "<br>";
    //cara 2
    echo "berhasil membeli" . $buy->nameCar = "Honda civic 2023". 'dengan kapasitas'

?>