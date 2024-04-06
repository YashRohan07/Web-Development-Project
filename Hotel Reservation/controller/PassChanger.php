<?php
require_once('../model/adminDatabase.php');

session_start();

if(isset($_POST['submit'])){
    $code = $_POST['code'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $conn = dbConnect(); 
    $query = "SELECT * FROM admins WHERE code='$code'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if ($password === $confirm_password) {
            mysqli_query($conn, "UPDATE admins SET password='$password' WHERE code='$code'");
            header('location:../view/AdminLogin.php');
        } else {
            echo "Passwords do not match!";
        }
    } else {
        echo "Code Not Matched!";
    }

    mysqli_close($conn);
}
?>
