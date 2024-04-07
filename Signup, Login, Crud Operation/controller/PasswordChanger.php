<?php
require_once('../model/model.php');
session_start();

if(isset($_POST['submit'])){
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];
    
    // Retrieve the user's ID from the session
    $id = $_SESSION['id'];

    // Call the changePassword function
    $change_result = changePassword($id, $current_password, $new_password, $confirm_new_password);

    if($change_result === true) {
        // Password changed successfully, redirect to login page
        header('location:../view/Login.php');
        exit();
    } else {
        // Password change failed, display error message
        echo $change_result;
    }
}
?>
