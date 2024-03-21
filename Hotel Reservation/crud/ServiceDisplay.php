<?php
include 'DatabaseConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Service Management</title>
<style>
    fieldset{
        background-color: #59D5E0;
        width: 60%;
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
<h2>Service Management</h2>

<!-- Button to add a new service -->
<form action="Services.php" method="post">
    <input type="submit" value="Add Service">
</form>

<br>
<br>

<!-- Table to display service data -->
<table>
  <tr>
    
    <th>Guest Feedback Email</th>
    <th>Event Booking Email</th>
    <th>Transportation Type</th>
    <th>Promotion & Discount</th>
    <th>Actions</th>
  </tr>
  <!-- PHP code to fetch and display service data -->
  <?php
  $con = dbConnect(); // Establish database connection
  $sql = "SELECT * FROM services"; 
  $result = mysqli_query($con, $sql);  

  if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $feedback_email = $row['feedback_email'];
          $booking_email = $row['booking_email'];
          $transportation_type = $row['transportation_type'];
          $promotions_link = $row['promotions_link'];

          echo '<tr>
              <td>'.$feedback_email.'</td>
              <td>'.$booking_email.'</td>
              <td>'.$transportation_type.'</td>
              <td>'.$promotions_link.'</td>
              <td>
                  <button><a href="ServiceUpdate.php?id=' . $id . '">Update</a></button>
                  <button><a href="ServiceDelete.php?id=' . $id . '">Delete</a></button>
              </td>
              </tr>';
      }
  } else {
      echo '<tr><td colspan="5">No services found</td></tr>';
  }
  ?>  
</table>
</fieldset>
</center>
</body>
</html>
