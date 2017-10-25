<?php
class Thing
{
    private $name;
    private $model;

    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getModel()
    {
        return $this->model;
    }
}


interface PriceForColor
{
    public function changePrice();
}
interface GetDescription
{
    public function getDescription();
}
interface SalePrice
{
    public function dropPrice();
}
interface ShowWiki
{
    public function urlShow();
}


class NewGood extends Thing
{
    protected $price;
    protected $color;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}


class NewCar extends NewGood implements PriceForColor
{
    public function changePrice()
    {
       if ($this->color !== 'белый')
       {
           echo "К цене автомобиля {$this->getPrice()} будет прибавлена стоимость выбраного цвета", '<br />';
       } else {
           $changedPrice = $this->getPrice() + 17000;
           echo "Стоимость авто {$this->getName()} {$this->getModel()} равна {$changedPrice} рублей", '<br />';
        }
    }
}


class NewPen extends NewGood implements GetDescription
{
    private $cap;

    public function getCap()
    {
        return $this->cap;
    }

    public function setCap($cap)
    {
        if (is_bool($cap)) {
            $this->cap = $cap;
            return $this;
        } else {
            echo 'Введенный параметр должен быть TRUE или FALSE', '<br />';
            die;
        }
    }
    private function capPresence()
    {
        $capdata = ($this->cap) ? 'колпачок в наличии' : 'колпачка нет';
        return $capdata;
    }
    public function getDescription()
    {
        return "Ручка {$this->getName()} {$this->getModel()}, {$this->capPresence()}" . '<br />';
    }
}


class NewTV extends NewGood implements GetDescription, SalePrice
{
    private $diagonal;

    public function getDiagonal()
    {
        return $this->diagonal;
    }


    public function setDiagonal($diagonal)
    {
        $this->diagonal = $diagonal;
        return $this;
    }

    public function dropPrice()
    {
        //скидка на все телевизоры 25%
        $droppedPrice = $this->getPrice() - $this->getPrice() * 0.25;
        return $droppedPrice;
    }

    public function getDescription()
    {
        return "Телевизор {$this->getName()} {$this->getModel()} с диагональю {$this->getDiagonal()}". '<br />'
            . "<strike>Цена {$this->getPrice()} рублей</strike>. Новая цена <b>{$this->dropPrice()}</b> рублей<br/>";

    }
}

class NewDuck extends Thing implements ShowWiki, GetDescription
{
    const WINGS = 2;
    const LEGS = 2;

    public function urlShow()
    {
        echo '<a href="https://ru.wikipedia.org/wiki/'. $this->getModel() .'">'.$this->getModel().'</a>';
    }

    public function getDescription()
    {
        echo '<b>'.$this->getName().'</b>', '<br/>';
        echo $this->urlShow(), '<br/>';
        echo 'Количество крыльев - ' . self::WINGS . '<br>';
        echo 'Количесво лап - ' . self::LEGS . '<br>';
    }
}


$audi = new NewCar('Audi', 'A3');
$audi
    ->setColor('белый')
    ->setPrice(2000000);
$audi->changePrice();

$waterman = new NewPen('Waterman', 'Expert 3 Stainless Steel GT');
$waterman->setCap(True);
echo $waterman->getDescription();

$sony = new NewTV('Sony', 'ZD9 Series');
$sony->setPrice(329990)
    ->setDiagonal('65"');
echo $sony->getDescription();

$sviyaz = new NewDuck('Дикая утка', 'Свиязь');
echo $sviyaz->getDescription();
