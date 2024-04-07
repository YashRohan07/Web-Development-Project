<?php
require_once('database.php');

function login($id, $password){
    $con = dbConnect();
    $sql = "SELECT * FROM data WHERE id='$id' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}

function getAllUser(){
    $con = dbConnect();
    $sql = "SELECT * FROM data";
    $result = mysqli_query($con, $sql);

    $data =[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($data, $row);
    }

    return $data;
}

function getUserById($id){
    $con = dbConnect();
    $sql = "SELECT * FROM data WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function createUser($id, $password, $name, $email, $usertype){
    $con = dbConnect();

    $sql = "INSERT INTO data (id, password, name, email, usertype) VALUES ('$id', '$password', '$name', '$email', '$usertype')";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteUser($id){
    $con = dbConnect();
    $sql = "DELETE FROM data WHERE id='$id'";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function updateUser($id, $password, $name, $email, $usertype){
    $con = dbConnect();
    
    // SQL query to update user data in the 'data' table
    $sql = "UPDATE data SET password='$password', name='$name', email='$email', usertype='$usertype' WHERE id='$id'";
    
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function userSearch($search_id){
    $con = dbConnect(); // Establish database connection
    
    // SQL query to retrieve user information based on ID
    $sql = "SELECT * FROM `data` WHERE id='$search_id'";
    
    $result = mysqli_query($con, $sql); // Execute the query
    
    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result); // Fetch user data
        return $user;
    } else {
        return false;
    }
}

?>
