<?php
include '../model/database.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $password = $_POST['password']; 
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
   

    $con = dbConnect(); // Establish database connection

    // Use backticks (`) for table name and column names
    $sql = "INSERT INTO `data` (id,password,name, email, usertype)
            VALUES ('$id', '$password', '$name', '$email','$usertype')";  

    $result = mysqli_query($con, $sql); // Execute the INSERT query
    if($result){
       // echo "Data Inserted Successfully";
       header('location:../view/UserDisplay.php');
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
            width:400px;
        }

        table {
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {
            background-color:#59D5E0;
            border: 1px solid #ddd;
            padding: 5px;
        }
    </style>
</head>
<body>

<center>
<fieldset>
<h1>User Form</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table border="1">
                <tr>
                    <td>Id:</td>
                    <td><input type="text" id="id" name="id" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" id="confirm_password" name="confirm_password" required></td> <!-- Use different name for confirm password field -->
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td>User Type:</td>
                    <td>
                        <select name="usertype" id="usertype" required>
                            <option value="">Select User Type</option>
                            <option value="Admin">Admin</option> 
                            <option value="User">User</option> 
                        </select>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" name="submit" value="Register"> 
                        
                    </td>
                </tr>
            </table>
</form>
</fieldset>
</center>

</body>
</html>
