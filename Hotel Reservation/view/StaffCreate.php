<?php
include '..\model\staffModel.php';

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $role = $_POST['role'];

    // Call the createStaff function from the StaffModel
    if(createStaff($name, $age, $role)) {
        header('location: StaffDisplay.php');
    } else {
        echo "Error: Unable to create";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Registration Form</title>
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
<h1>Staff Form</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" required><br><br>
    
    <label for="role">Role:</label><br>
    <input type="text" id="role" name="role"  required><br><br>
   
    
    <input type="submit" name="submit" value="Submit">
</form>

</fieldset>
</center>

</body>
</html>
