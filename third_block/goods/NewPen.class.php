<?php
declare(strict_types=1);

namespace feliska;


class NewPen extends NewGood implements GetDescription
{
    private $cap;

    public function getCap()
    {
        return $this->cap;
    }

    public function setCap(bool $cap)
    {
        $this->cap = $cap;
        return $this;
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