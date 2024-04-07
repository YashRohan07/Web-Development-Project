<?php
include '../model/model.php';

// Get the user ID from the URL
$id = $_GET['id'];

// Retrieve user data based on the ID
$user = getUserById($id);

if(isset($_POST['submit'])) {
    // Retrieve form data
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
        
    // Call updateUser function from model.php
    $result = updateUser($id, $password, $name, $email, $usertype); 
    if($result){
        header('location:UserDisplay.php');
        exit();
    } else {
        die("Error: Failed to update user.");
    }
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

<form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $_GET['id']; ?>" method="post">
 
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
   
    <label for="usertype">User Type:</label><br> 
    <input type="text" id="usertype" name="usertype" value="<?php echo $user['usertype']; ?>" required><br><br> 

    
    <input type="submit" name="submit" value="Update">
</form>
</fieldset>
</center>
</body>
</html>
