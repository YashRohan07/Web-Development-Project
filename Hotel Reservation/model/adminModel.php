<?php
require_once('Database.php');
 
function login($username, $password){
    $con = dbConnect();
    $sql = "select * from admins where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
 
    if($count == 1){
        return true;
    }else{
        return false;
    }
}
 
function getAllAdmin(){
    $con = dbConnect();
    $sql = "select * from admins";
    $result = mysqli_query($con, $sql);
 
    $admins =[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($admins, $row);
    }
 
    return $admins;
 
}
 
function getUserById($id){
 
}
 

 
?>