<?php


namespace feliska;


class Basket implements \ArrayAccess
{
    private $goods = array();

    public function basketSum()
    {
        if (!array_sum($this->goods)) {
            echo "Сумма равна 0";
        } else {
            return "Сумма: " . (array_sum($this->goods));
        }
    }

    public function offsetExists($offset)
    {
        return isset($this->goods[$offset]);
    }

    public function offsetGet($offset)
    {

    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->goods[$offset] = $value;
        } else {
            $this->goods[$offset] = $value;
        }

    }

    public function offsetUnset($offset)
    {
        unset($this->goods[$offset]);
        echo "Товар " . $offset . "deleted from basket";
    }
}
$something = new Basket();
$something["vw"] = 3000;
$something["audi"] = 4000;
echo $something->basketSum();
echo '<br>';
print_r($something);
