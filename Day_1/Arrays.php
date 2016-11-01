<?php
/**
 * Created by PhpStorm.
 * User: nicholas.ball
 * Date: 31/10/2016
 * Time: 13:53
 */
$person[0] = "Edison";
$person[1] = "Wankel";
$person[2] = "Crapper";

$creator["Light bulb"] = "Edison";
$creator["Rotary engine"] = "Wankel";
$creator["Toilet"] = "Crapper";

//Associative Array
$creators = array('Light bulb' => "Edison",
                    'Rotary Engine' => "Wankel",
                'Toilet' => "Crapper");

asort($creators);

foreach ($creators as $invention => $inventor) {
    echo "$inventor created $invention";
    echo "<br />";
}

sort($creators);

foreach ($creators as $invention => $inventor) {
    echo "$inventor created $invention";
    echo "<br />";


if(is_array($creators)) {
    var_dump($creators);
}}