<?php

// this will avoid mysqli_connect() depreciation error
//error_reporting( ~E_DEPRECIATED & ~E_NOTICE );
// but I strongly suggest you to use PDO or MySQLi.

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'dbtest');

$conn = mysqli_connect(DBHOST, DBUSER, DBPASS);
$dbconn = mysqli_select_db(DBNAME);

if ( !$conn ) {
    die("Connection failed : " . mysqli_error());
}

if ( !$dbconn ) {
    die("Database Connection failed : " . mysqli_error());
}