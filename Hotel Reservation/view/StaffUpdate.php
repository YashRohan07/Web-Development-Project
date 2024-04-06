<?php
include '../model/staffModel.php'; 

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $role = $_POST['role']; 

    $id = $_GET['id']; // Get the user ID from the URL
    
    // Call the updateStaff function from the model
    if(updateStaff($id, $name, $age, $role)) {
       header('location: StaffDisplay.php');
    } else {
        echo "Error: Unable to update";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Update Form</title>
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
<h1>Staff Update Form</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $_GET['id']; ?>" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="" required><br><br>
    
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" value="" required><br><br>
    
    <label for="role">Role:</label><br>
    <input type="text" id="role" name="role" value="" required><br><br>
    
    <input type="submit" name="submit" value="Update">
</form>
</fieldset>
</center>
</body>
</html>
