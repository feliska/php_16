<?php

class Car
{
    public $brand;
    public $model;
    public $color;
    public $year;
    public $price;

    public function __construct($brand, $model,$year, $color = 'белый')
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
    }

    public function printCarData()
    {
        echo 'Марка: '.$this->brand.'<br>'. 'модель: '.$this->model.' год выпуска: '.$this->year.' цвет: '.$this->color;
        echo '<br>';
    }
}


class Televisor
{
    public $brand;
    public $model;
    public $diagonal;

    public function __construct($brand, $model, $diagonal)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->diagonal=$diagonal;
    }
}


class Pen
{
    public $brand;
    public $color;
    public $cap;

    public function __construct($brand, $color, $cap = false)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->cap=$cap;
    }
    function

}





$audi = new Car('Audi', 'A3', '2014');
$audi->printCarData();
$nissan = new Car('Nissan', 'Juke', '2011', 'серый');
$nissan->printCarData();

$samsung = new Televisor('Samsung', 'UE32J4710AK', '32"');
$lg = new Televisor('LG', '32LJ622V', '32"');