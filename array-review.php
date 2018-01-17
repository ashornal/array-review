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


function addAnimals($string, $animals)
{
    echo nl2br ("\n adding $string ... \n");
    $string = strtolower($string);
    if(!(in_array($string, $animals)))
    {
        array_push($animals, $string);
    }
    printAnimals($animals);
}

printAnimals($animals);
addAnimals("goat", $animals);
addAnimals("Boa", $animals);
