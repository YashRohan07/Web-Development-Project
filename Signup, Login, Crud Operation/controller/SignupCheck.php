<?php
require_once('../model/model.php');

$id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$confirm_password = $_REQUEST['confirm_password'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$usertype = $_REQUEST['usertype'];

if ($id == "" || $password == "" || $confirm_password == "" || $name == "" || $email == "" || $usertype == "") {
    echo "Please fill in all the required fields.";
} elseif ($password !== $confirm_password) {
    echo "Passwords do not match. Please try again.";
} else {
    $user = [
        'id' => $id,
        'password' => $password,
        'name' => $name,
        'email' => $email,
        'usertype' => $usertype
    ];
   
    $status = createUser($user);

    if ($status) {
        header('location: ../view/Login.php');
        exit(); 
    } else {
        echo "Database error. Please try again.";
    }
}
?>
