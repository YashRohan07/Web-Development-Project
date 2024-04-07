<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        fieldset{
            width:400px;
            background-color: #59D5E0;
        }
    </style>
</head>
<body>
<center>
<fieldset>

<?php
    
session_start();

// Check if the user is logged in
if (!isset($_SESSION['flag'])) {
    header('location: ../view/Login.php');
    exit();
}

// Retrieve user data from the session
$name = $_SESSION['name'];
$usertype = $_SESSION['usertype'];

// Connect to the database
require_once '../model/database.php';
$con = dbConnect();

// Prepare the SQL query to fetch user information based on the logged-in user's name
$query = "SELECT name, password, email, usertype FROM data WHERE name = '$name'";

// Execute the SQL query
$result = mysqli_query($con, $query);

// Check if the query executed successfully
if ($result) {
    // Fetch the user's profile information
    $row = mysqli_fetch_assoc($result);

    // Display the profile information
    echo "<h1>Profile</h1>";
    echo "<p><strong>Username:</strong> " . $row['name'] . "</p>";
    echo "<p><strong>Password:</strong> " . $row['password'] . "</p>";
    echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
    echo "<p><strong>User Type:</strong> " . $row['usertype'] . "</p>";
} else {
    echo "Error fetching profile information: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>

</fieldset>
</center>    
</body>
</html>

