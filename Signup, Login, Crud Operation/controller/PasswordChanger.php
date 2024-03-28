<?php
require_once('../model/database.php');
session_start();

if(isset($_POST['submit'])){
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];
    
    // Retrieve the user's ID from the session
    $id = $_SESSION['id'];

    $conn = dbConnect(); 

    // Modify the query to fetch the data for the current user
    $query = "SELECT * FROM data WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if ($current_password == $row['password']) {
            if ($new_password == $confirm_new_password) {
                // Update the user's password
                mysqli_query($conn, "UPDATE data SET password='$new_password' WHERE id='$id'");
                
                // Redirect to the login page
                header('location:../view/Login.php');
                exit();
            } else {
                echo "New passwords do not match!";
            }
        } else {
            echo "Current password is incorrect!";
        }
    } else {
        echo "User not found!";
    }

    mysqli_close($conn);
}
?>
