<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 1/16/2018
 * Time: 9:59 PM
 */

$animals = array("panda", "alpaca", "boa");

function printAnimals($animals)
{
    sort($animals);

    for($i = 0; $i < count($animals); $i++)
    {
        echo $animals[$i] . " ";
    }
}
printAnimals($animals);