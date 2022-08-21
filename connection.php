<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "go_mechanic";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
