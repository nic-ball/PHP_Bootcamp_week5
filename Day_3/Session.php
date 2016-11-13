<?php

function start_randomise() {
    //Generate random number
    $_SESSION['num'] = $number = rand(1, 50);
    $_SESSION['attempt'] = 0;
    echo "<p>Guess a number between 1 - 50!</p>";
}
if(empty($_SESSION))
    session_start();

?>
<html>
<head>
</head>
<body>
    <h3>Number guessing game!</h3>
    <?php
    $userInput = $_POST['number'];
    if(!isset($_SESSION['num']))
        start_randomise();

    $number = $_SESSION['num'];
    $attempt = $_SESSION['attempt'];
    if($number == $userInput)
        $message = "BOOM-GO!";
    if($number < $userInput) {
        $message = "Random number is smaller";
        $_SESSION['attempt']++;
    }
    if($number > $userInput) {
        $message = "Random number is larger";
        $_SESSION['attempt']++;
    }
    echo "You entered: " . $userInput . "<br />" .
         $message . "<br />" .
        "Number of attempts is : " . $_SESSION['attempt'];

    ?>
<form method="post" action="Session.php">
    <input type="text" name="number" />
    <input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>


<!--//register variable-->
<!--//$_SESSION['hits'] = $_SESSION['hits'] + 1;-->
<!--//-->
<!--//echo "This page has been viewed " . $_SESSION['hits'] . " times<br />";-->
<!--//echo "From Session ID:" . session_id();-->
