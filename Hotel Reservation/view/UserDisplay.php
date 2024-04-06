<?php
include '..\model\userModel.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Management</title>
<style>
    fieldset{
        background-color: #59D5E0;
        width: 50%;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
</style>
</head>
<body>
<center>
<fieldset>
<h2>User Management</h2>

<form action="UserCreate.php" method="get">
    <input type="submit" value="Add User">
</form>
<br>
<form action="AdminDashboard.php">
    <input type="submit" value="Home">
</form>

<br>
<br>

<!-- Table to display user data -->
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Password</th>
    <th>Actions</th>
  </tr>
 
<?php
$con = dbConnect(); 
$sql = "SELECT * FROM users"; 
$result = mysqli_query($con, $sql);  

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];

        echo '<tr>
            <th scope="row"> '.$id.' </th>
        
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <button><a href="UserUpdate.php?id=' . $id . '">Update</a></button>
            <button><a href="UserDelete.php?id=' . $id . '">Delete</a></button>
        </td>
        
            </tr>';
    }
} else {
    echo '<tr><td colspan="6">No users found</td></tr>';
}
?>  
</table>
</fieldset>
</center>
</body>
</html>
