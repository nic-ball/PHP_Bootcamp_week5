<?php
function chBox() {
    $arrays = array('Sunshine', 'Clouds', 'Rain');

    foreach($arrays as $w) {
        echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$w\" />"
        . $w . "<br />";
    }
}