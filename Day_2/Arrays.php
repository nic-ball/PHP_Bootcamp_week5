<?php

$test[0] = "test";

$numbers = range(1, 5); // numbers = array(1,2,3,4,5);
$letters = range('a', 'z');

$row0 = array("Nic", "Ball");
$row1 = array("Fox", "Mulder");
$twoD = array($row0, $row1);

$lastMet = array(array('fn' => 'Nic', 'ln' => 'Ball'),
                    array('fn' => 'Fox', 'ln' => 'Mulder'));

//Manipulate arrays
$array = ['fn' => 'Dana', 'ln' => 'Scully', 'role' => 'FBI Agent'];

$subset = array_slice($array, 1, 2);
print_r($subset);

if(array_key_exists('role', $array)) {
    echo "YES, role key existed!";
}

$removed = array_splice($array, 2, 1);
print_r($removed);

$first = 'awesome';
$second = 'dude';
$third = 'sweet';
$createArray = compact("first", "second", "third");
print_r($createArray);



