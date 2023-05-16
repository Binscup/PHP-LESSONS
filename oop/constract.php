<?php
    class Car
    {
        Public $nameCar;
        Public $typeCar;
        Public $colorCar;

        public function __construct($nameCar, $typeCar, $colorCar)
        {
            $this->nameCar = $nameCar;
            $this->typeCar = $typeCar;
            $this->colorCar = $colorCar;

        }
        public function detailCar()
        {
            echo "mobil saat ini adalah " . $this->nameCar .
            "tipe mobilnya " .$this->typeCar .
            "warnya mobilnya adalah". $this->colorCar;
        }
    }
    $car = new Car("civic turbo","sports","greentea",);
    $car->detaiCar();
?>