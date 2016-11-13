<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <meta content="text/html; charset=utf-8">
</head>
<body>
<?php

//Get the data from the form
//This version has no error checking
$customeremail = $_POST['customeremail'];
if ($_POST["customeremail"] == "") {
    echo "You did not enter an email address";
    exit;
}
$message = $_POST['message'];
if (!preg_match("/^\w+@\w+\.\w+$/ ", $_POST["customeremail"])) {
    echo "Email address is not valid";
    exit;
}
$replywanted = false;
if (isset($_POST["replywanted"])) $replywanted = true;

//Build the text of the email
$t = "You have received a message from" . $customeremail . " :\n";
$t = $t . $message . "\n";
if ($replywanted)
    $t = $t . "A reply was requested";
else
    $t = $t . "No reply was requested";

//Send an email to the librarian
mail("nic@localhost", "Customer Message", $t);

//Give the user a nice warm fuzzy feeling
echo "Thank you. Your message has been sent";

?>
</body>

</html>


