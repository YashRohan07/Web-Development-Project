<?php
include '../model/database.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $usertype = $_POST['usertype'];
        
        $con = dbConnect(); // Establish database connection
    
        // Use backticks (`) for table name and column names
        $sql = "UPDATE `data` SET name='$name', email='$email', password='$password', usertype='$usertype' WHERE id=$id";
    
        $result = mysqli_query($con, $sql); // Execute the UPDATE query
        if($result){
           header('location:UserDisplay.php');
           exit();
        } else {
            die(mysqli_error($con));
        }
    }

    // Fetch user data for pre-filling the form
    $con = dbConnect();
    $sql = "SELECT * FROM `data` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Update Form</title>
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
<h1>User Update Form</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
   
    <label for="usertype">User Type:</label><br> 
    <input type="text" id="usertype" name="usertype" value="<?php echo $user['usertype']; ?>" required><br><br> <!-- Corrected the input type -->

    
    <input type="submit" name="submit" value="Update">
</form>
</fieldset>
</center>
</body>
</html>
