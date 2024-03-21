<?php
include 'DatabaseConnect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $role = $_POST['role']; 
        
        $con = dbConnect(); // Establish database connection
    
        // Use backticks (`) for table name and column names
        $sql = "UPDATE `staff` SET name='$name', age=$age, role='$role' WHERE id=$id";
    
        $result = mysqli_query($con, $sql); // Execute the UPDATE query
        if($result){
            //echo "Updated Successfully";
            header('location:StaffDisplay.php');
        } else {
            die(mysqli_error($con));
        }
    }

    // Fetch existing staff data to pre-fill the form
    $con = dbConnect(); // Establish database connection
    $sql = "SELECT * FROM staff WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $staffData = mysqli_fetch_assoc($result);
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

<form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="post">
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
