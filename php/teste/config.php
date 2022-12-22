<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);


$hostName   = "localhost";
$usernameDB = "";
$passwordDB = "";
$nameDB     = "estudo";

//Connect To Database
$connection = new mysqli($hostName, $usernameDB, $passwordDB, $nameDB);

if ($connection->connect_errno) {
    echo 'erro';
}
