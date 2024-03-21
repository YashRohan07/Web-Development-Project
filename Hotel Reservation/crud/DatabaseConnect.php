<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hotel";

function dbConnect(){
    global $host, $dbname, $dbuser, $dbpass;

    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);

    if(!$con){
        die("Connection failed: " . mysqli_connect_error());
    }

    return $con;
}

?>
