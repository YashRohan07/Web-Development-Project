<?php
include 'DatabaseConnect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password']; 

    $con = dbConnect(); // Establish database connection

    // Use backticks (`) for table name and column names
    $sql = "INSERT INTO `users` (name, email, mobile, password)
            VALUES ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql); // Execute the INSERT query
    if($result){
       // echo "Data Inserted Successfully";
       header('location:UserDisplay.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration Form</title>
<style>
  fieldset{
        background-color: #59D5E0;
        width: 40%;
    }
</style>
</head>
<body>

<center>
<fieldset>
<h1>User Form</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="mobile">Mobile:</label><br>
    <input type="tel" id="mobile" name="mobile"  required><br><br>
   
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" name="submit" value="Submit">
</form>
</fieldset>
</center>

</body>
</html>
