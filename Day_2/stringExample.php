<?php


printf('%.2f', 30.49343);
printf("The hex value of %d is %x", 214, 214);

echo "<br />";

$month = 11;
$day = 1;
$year = 2016;
printf('%02d/%02d/%04d', $month, $day, $year);

$test = "nIc ball";
echo "<br />";
print(strtolower($test)) . "<br />";
print(ucwords($test));

echo "<br />";

$number = 5;
$st = "5";
if ($number == $st)
    echo "equal!";
if ($number === $st)
    echo "not equal!";

$st2 = "PHP is awesome";
if ($st2 < $number)
    echo "true";

$st3 = "Python is cool";
if (strcmp($st2, $st3) > 0)
    echo "strcmp is true" . "<br >";

//Manipulate strings
$text = "When is the most awesome part of the day";
$extract = substr($text, 17, 7);
print strtoupper($extract) . "<br />";

$sketch = <<< EndSketch
This is a long text.
It is a period of civil war. Rebel spaceships, striking from hidden base.
A long time ago in a galaxy far far away.aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
EndSketch;

$stringTest = "This is a new galaxy smart phone";
$replace = substr_replace($stringTest, "boom", 14, 4);
echo $replace;

//split string return as array
$testArray = explode(" ", $stringTest);
print_r($testArray);

echo "<br />";

$stringResult = implode(' ', $testArray);
echo $stringResult;

echo "<br />";

$position = strpos($stringResult, 'g');
echo $position;