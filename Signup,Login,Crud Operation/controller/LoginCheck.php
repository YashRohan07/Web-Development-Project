<?php
session_start();
require_once('../model/model.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $password = $_POST['password'];

    if ($id == "" || $password == "") {
        echo "Please enter both ID and password!";
    } else {
        $user = getUserById($id); // Assuming this function retrieves user data including name and usertype

        if ($user['password'] == $password) {
            $_SESSION['id'] = $id;
            $_SESSION['flag'] = true;
            $_SESSION['name'] = $user['name']; // Set the username in the session
            $_SESSION['usertype'] = $user['usertype']; // Set the usertype in the session
            header('location: ../view/Dashboard.php');
            exit();
        } else {
            echo "Invalid user!";
        }
    }
} else {
    // Redirect to the login page if accessed directly
    header('location: Login.php');
    exit();
}
?>
