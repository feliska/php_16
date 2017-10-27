<?php

namespace feliska;


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