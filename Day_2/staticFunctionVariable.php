<?php
function counter() {
    static $count = 0;
    return $count++;
} //when function ends $count is not destroyed (display 0 - 4)
for($i = 1; $i <= 5; $i++) {
    print counter();
}

// Parameter by reference
function doublers(&$value)
{
    return $value = $value << 2;
}
    $a = 10;
    doublers($a);
    echo $a;


//function searchUserName($whichUser = 'all') {
    //if $whichUser is 'all', return all users
//}
    $names = array("Nic", "Fox");
    function &find($n) {
    global $names;
    return $names[$n];
}
$person =& find(1);

