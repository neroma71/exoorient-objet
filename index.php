<?php

require_once('utils/loadClass.php');

$formule = new Formule1(50);

echo $formule->drive();

$formule->shiftGear();

echo $formule->drive();


