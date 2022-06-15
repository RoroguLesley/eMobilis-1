<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "muranga_db";
//connect to the db
$connection = mysqli_connect($host,$user,$password,$dbName);
//check if the connr=ection failed to stop any further processes
if(!isset($connection)){
    die("DB connection failed");
}