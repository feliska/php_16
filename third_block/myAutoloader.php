<?php

//namespace feliska;


function feliskaAutoload($className)
{
    $filePath = './' . $className . '.class.php';

    if (file_exists($filePath)) {
        include "$filePath";
    }
}

function gAutoload($className)
{
    $filePath = './goods/' . $className . '.class.php';

    if (file_exists($filePath)) {
        include "$filePath";
    }
}

function bAutoload($className)
{
    $filePath = './birds/' . $className . '.class.php';

    if (file_exists($filePath)) {
        include "$filePath";
    }
}

spl_autoload_register('feliska\feliskaAutoload');
spl_autoload_register('feliska\gAutoload');
spl_autoload_register('feliska\bAutoload');

//feliskaAutoload("Thing");


class Joy extends \feliska\Thing
{
    private $top;

    public function getTop()
    {
        return $this->top;
    }

    public function setTop($top)
    {
        $this->top = $top;
        return $this;
    }

};

$newThing = new Joy('Sony', 'Bravia');
echo $newThing->getName();

print_r(get_included_files());
$vw = new \feliska\NewCar('vw', 'scirocco');
echo $vw->getName();



