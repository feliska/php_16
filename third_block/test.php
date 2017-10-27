<?php
namespace feliska;

require_once 'myAutoloader.php';


$audi = new NewCar('Audi', 'A3');
$audi
    ->setColor('белый')
    ->setPrice(2000000);
$audi->changePrice();

$waterman = new NewPen('Waterman', 'Expert 3 Stainless Steel GT');
try {
    $waterman->setCap(False);
} catch (\Exception $e) {
    echo $e->getMessage(), "\n";
}

echo $waterman->getDescription(), '<br>';

$sony = new NewTV('Sony', 'ZD9 Series');
$sony->setPrice(329990)
    ->setDiagonal('65"');
echo $sony->getDescription(), '<br>';

$sviyaz = new NewDuck('Дикая утка', 'Свиязь');
echo $sviyaz->getDescription(), '<br>';

$newtv = new NewTV('Sony', 'Bravia');
echo $newtv->getName(),'<br>';

