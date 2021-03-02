<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "b3w2";

$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli -> connect_errno){
    die();
}