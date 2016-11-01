<?php


//if else
$currMonth = date('F', time());

var_dump($currMonth);
if(strcmp($currMonth, 'October') == 0) {
    echo "Yes is is October!";
} else if(strcmp($currMonth, 'November') == 0)
    echo "Future";

//switch
$name = "Nic";
switch($name) {
    case 'Nic':
    case 'David':
        print "BOOM Nic and David";
        break;
} //can use colon and endswitch instead of curly braces

$func = 'test1';
switch($func) {
    case 'test1':
        test1();
    case 'test2':
        test2();
        break;
}

function test1() {
    echo "Function 1 is called";
}

function test2() {
    echo "Function 2 is called";
}

//while
$i = 0; $total = 0;
while($i <= 100) {
    if ($i == 15) {
        break;
    }
    $total += $i;
    $i++;
}
echo "Total: " . $total;
//0,1,2,3
$data = array("This", "is", "it", ".");
for($i = 0; $i < sizeof($data); $i++) {
    echo $data[$i];
}

foreach ($data as $d) {
    echo $d . "<br />";
}

class PersonArray {
    var $name;
    function __construct($name) {
        $this->name = $name;
    }

    public function getObjectVar() {
        var_dump(get_object_vars($this));
    }

}

$nic = new PersonArray('Nic Ball');
$john = new PersonArray('John Deere');

$people = array($nic,$john);

foreach($people as $person) {
    $person->getObjectVar();
    echo ",";
}