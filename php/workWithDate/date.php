<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$hour = date("H:i:s");
$dayOfWeek = intval(date("w"));

if ($dayOfWeek !== 6) {
    $cooldown =  6 - $dayOfWeek;
} else {
    $cooldown = "Hoje é Sabado";
}

include "./template.php";
