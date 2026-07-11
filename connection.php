<?php

$dbHost= 'localhost';
$dbUsername = 'root';
$dbpass = '';
$dbname='crud';
$conn = mysqli_connect($dbHost,$dbUsername,$dbpass,$dbname);
 if(!$conn){
    die("something went wrong in connection");
 }

?>