<?php
include 'DatabaseConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Management</title>
<style>
    fieldset{
        background-color: #59D5E0;
        width: 40%;
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
<h2>Staff Management</h2>

<!-- Button to open staffRegistration.php -->
<form action="Staff.php" method="get">
    <input type="submit" value="Add Staff">
</form>

<br>
<br>

<!-- Table to display staff data -->
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Role</th>
    <th>Actions</th>
  </tr>
  <!-- Your PHP code to fetch and display staff data will go here -->
<?php
$con = dbConnect(); // Establish database connection
$sql = "SELECT * FROM staff"; 
$result = mysqli_query($con, $sql);  

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $age = $row['age'];
        $role = $row['role'];
      

        echo '<tr>
            <th scope="row">'.$id.'</th>
        
            <td>'.$name.'</td>
            <td>'.$age.'</td>
            <td>'.$role.'</td>
            
            <td>
            <button><a href="StaffUpdate.php?id=' . $id . '">Update</a></button>
            <button><a href="StaffDelete.php?id=' . $id . '">Delete</a></button>
        </td>
        
            </tr>';
    }
} else {
    echo '<tr><td colspan="5">No Staff found</td></tr>';
}
?>  
</table>
</fieldset>
</center>
</body>
</html>
