<?php


namespace feliska;


abstract class NewGood
{
    private $name;
    private $model;
    protected $price;
    protected $color;

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