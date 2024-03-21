<?php
    require_once('../model/userModel.php');
   
    // Retrieve user input from the form
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $dob = $_REQUEST['dob'];
    $phone = $_REQUEST['phone'];
    $gender = $_REQUEST['gender'];
    $blood_group = $_REQUEST['blood_group'];
 
    // Check if any of the required fields are empty
    if ($username == "" || $password == "" || $email == "" || $dob == "" || $phone == "" || $gender == "" || $blood_group == "") {
        echo "Please fill in all the required fields.";
    } else {
        // Proceed to create the user
        $user = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'dob' => $dob,
            'phone' => $phone,
            'gender' => $gender,
            'blood_group' => $blood_group
        ];
       
        $status = createUser($user);
        if ($status) {
            header('location: ../view/login.php');
        } else {
            echo "Database error. Please try again.";
        }
    }
?>
 