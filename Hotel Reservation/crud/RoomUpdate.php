<?php
include 'DatabaseConnect.php';

if(isset($_POST['submit'])){
    $room_type = $_POST['room_type'];
    $bed_type = $_POST['bed_type'];
    $room_price = $_POST['room_price'];
    
    // Retrieve the room ID from the URL parameter
    $id = $_GET['id'];

    $con = dbConnect(); // Establish database connection

    // Use backticks (`) for table name and column names, and single quotes (') for string values
    $sql = "UPDATE `room` SET room_type='$room_type', bed_type='$bed_type', room_price='$room_price' WHERE id=$id";

    $result = mysqli_query($con, $sql); // Execute the UPDATE query
    if($result){
       // echo "Update Successfully";
       header('location:RoomDisplay.php');
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
<title>Room Management</title>
<style>
  
  fieldset{
        background-color: #59D5E0;
        width: 40%;
    }


        table {
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {
            background-color: #59D5E0;
            border: 1px solid #ddd;
            padding: 5px;
        }
</style>
</head>
<body>

<center>
<fieldset>
<h1>Room Management</h1>

<!-- Enclose the form within <form> tags -->
<form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $_GET['id']; ?>" method="post">
<table border="1">
  <tr>
    <td><label for="room_type">Type of Room:</label></td>
    <td>
      <select id="room_type" name="room_type" required>
          <option value="Single">Single Room</option>
          <option value="Double">Double Room</option>
          <option value="Luxury">Luxury</option>
      </select>
    </td>
  </tr>
  <tr>
    <td><label for="bed_type">Type of Bed:</label></td>
    <td>
      <select id="bed_type" name="bed_type" required>
          <option value="Single">Single Bed</option>
          <option value="Double">Double Bed</option>
      </select>
    </td>
  </tr>
  <tr>
    <td><label for="room_price">Room Price:</label></td>
    <td><input type="number" id="room_price" name="room_price"  required></td>
  </tr>
  <tr>
    <!-- Specify the type="submit" attribute for the submit button -->
    <td colspan="2"><input type="submit" name="submit" value="Update"></td>
  </tr>
</table>
</form> <!-- Close the form -->
      </fieldset>
</center>

</body>
</html>
