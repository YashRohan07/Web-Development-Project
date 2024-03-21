<?php
include 'DatabaseConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Room Management</title>
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
<h2>Room Management</h2>

<!-- Button to open user.php -->
<form action="Room.php" method="get">
    <input type="submit" value="Manage Room">
</form>

<br>
<br>

<!-- Table to display user data -->
<table>
  <tr>
    <th>Room Number</th>
    <th>Room Type</th>
    <th>Bed Type</th>
    <th>Price</th>
    <th>Actions</th>
  </tr>
  <!-- Your PHP code to fetch and display user data will go here -->
<?php
$con = dbConnect(); // Establish database connection
$sql = "SELECT * FROM room"; 
$result = mysqli_query($con, $sql);  

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $room_type = $row['room_type'];
        $bed_type = $row['bed_type'];
        $room_price = $row['room_price'];

        echo '<tr>
            <th scope="row"> '.$id.' </th>
        
            <td>'.$room_type.'</td>
            <td>'.$bed_type.'</td>
            <td>'.$room_price.'</td>
            
            <td>
            <button><a href="RoomUpdate.php?id=' . $id . '">Update</a></button>
            <button><a href="RoomDelete.php?id=' . $id . '">Delete</a></button>
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
