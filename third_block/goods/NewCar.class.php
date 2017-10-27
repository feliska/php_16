<?php


namespace feliska;


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