<?php
   
session_start();
require_once('../model/adminModel.php');
 
$username  =  $_REQUEST['username'];
$password  =  $_REQUEST['password'];
 
if($username == "" || $password == ""){
    echo "null username or password!";
} else {
    $status = login($username, $password);
    if($status){
        $_SESSION['username'] = $username;
        $_SESSION['flag'] = true;
        header('location: ../view/AdminDashboard.php');
        exit();
    } else {
        echo "invalid user!";
    }
}