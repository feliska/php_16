<?php
namespace feliska;

//include 'Thing.class.php';
//include 'NewGood.class.php';
//include './goods/NewTV.class.php';
//include './goods/NewCar.class.php';


$audi = new NewCar('Audi', 'A3');
$audi
    ->setColor('белый')
    ->setPrice(2000000);
$audi->changePrice();

//$waterman = new \feliska\goods\NewPen.class('Waterman', 'Expert 3 Stainless Steel GT');
//try {
//    $waterman->setCap(False);
//} catch (TypeError $e) {
//    echo $e->getMessage(), "\n";
//}

//echo $waterman->getDescription();
//
//$sony = new NewTV('Sony', 'ZD9 Series');
//$sony->setPrice(329990)
//    ->setDiagonal('65"');
//echo $sony->getDescription();

//$sviyaz = new \feliska\NewDuck('Дикая утка', 'Свиязь');
//echo $sviyaz->getDescription();
$newtv = new NewTV('Sony', 'Bravia');
echo $newtv->getName();

