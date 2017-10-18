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
    private function capPresence()
    {
        $capdata = ($this->cap) ? 'колпачок в наличии' : 'колпачка нет';
        return $capdata;
    }

    public function printPenData()
    {
        echo 'Ручка '.$this->brand .', '. 'цвет '.$this->color. ', '. $this->capPresence();
        echo '<br>';
    }
}

class Duck
{
    const WINGS = 2;
    const LEGS = 2;
    public $species;

    public function __construct($species)
    {
        $this->species = $species;
    }

    public function showAmount()
    {
        echo '<b>'.$this->species.'</b>', '<br>';
        echo 'Количество крыльев - ' . self::WINGS . '<br>';
        echo 'Количесво лап - ' . self::LEGS . '<br>';
    }
}

class Good
{
    public $name;
    public $category;
    public $quantity;
    public $price;

    public function __construct($name, $category, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    public function allAmount()
    {
        if ($this->quantity) {
            return $this->price * $this->quantity . ' руб.';
        } else {
            echo 'Не введено количество товара ' . $this->name;
        }
    }
}



$audi = new Car('Audi', 'A3', '2014');
$audi->printCarData();
$nissan = new Car('Nissan', 'Juke', '2011', 'серый');
$nissan->printCarData();

$samsung = new Televisor('Samsung', 'UE32J4710AK', '32"');
$lg = new Televisor('LG', '32LJ622V', '32"');

$champion = new Pen('Champion', 'черный');
$champion->printPenData();
$parker = new Pen('Parker', 'синий', true);
$parker->printPenData();

$krya = new Duck('Свиязь');
$krya->showAmount();
$peg = new Duck('Пеганка');
$peg->showAmount();

$headphones = new Good('Audio-Technica', 'наушники', '9290');
$headphones->quantity = 4;
echo $headphones->name . ' - ' . $headphones->allAmount(), '<br>';
$keyboard = new Good('Razer BlackWidow X', 'клавиатуры', '5990');
echo $keyboard->allAmount();