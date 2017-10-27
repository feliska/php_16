<?php

namespace feliska;


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



