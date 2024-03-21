<?php
require_once('adminDatabase.php');

session_start();

if(isset($_POST['submit'])){
    $code = $_POST['code'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $conn = dbConnect(); // Establish database connection

    // Retrieve user with the provided email
    $query = "SELECT * FROM admins WHERE code='$code'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Email found in the database
        $row = mysqli_fetch_assoc($result);

        // Match plain text passwords
        if ($password === $confirm_password) {
            // Update password
            mysqli_query($conn, "UPDATE admins SET password='$password' WHERE code='$code'");
            //echo "Password changed successfully!";
            header('location:../view/AdminLogin.php');
        } else {
            echo "Passwords do not match!";
        }
    } else {
        // Email not found in the database
        echo "Code Not Matched!";
    }

    // Close database connection
    mysqli_close($conn);
}
?>
