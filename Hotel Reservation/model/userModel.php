<?php
require_once('Database.php');

function createUser($name, $email, $mobile, $password) {
    $con = dbConnect();
    $sql = "INSERT INTO users (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllUsers() {
    $con = dbConnect();
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);

    $users = [];
    while($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    return $users;
}

function getUserById($id) {
    $con = dbConnect();
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function updateUser($id, $name, $email, $mobile, $password) {
    $con = dbConnect();
    $sql = "UPDATE users SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteUser($id) {
    $con = dbConnect();
    $sql = "DELETE FROM users WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
?>
