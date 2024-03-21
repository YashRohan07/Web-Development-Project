<?php
include 'DatabaseConnect.php';

if(isset($_POST['submit'])){
    
    $feedback_email = $_POST['feedback_email'];
    $booking_email = $_POST['booking_email'];
    $transportation_type = $_POST['transportation_type'];
    $promotions_link = $_POST['promotions_link'];

    $con = dbConnect(); // Establish database connection

    // Use backticks (`) for table name and column names
    $sql = "UPDATE `services` SET 
            feedback_email = '$feedback_email',
            booking_email = '$booking_email',
            transportation_type = '$transportation_type',
            promotions_link = '$promotions_link' "; 

    $result = mysqli_query($con, $sql); // Execute the UPDATE query
    if($result){
       // echo "Data Updated Successfully";
       header('location:ServiceDisplay.php');
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
  <title>Service Configuration</title>
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
    <h1>Service Configuration</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <table>
        <tr>
          <td>
            <fieldset>
              <legend><strong>Guest Feedback & Support</strong></legend>
              <label for="feedback_email">Email for Feedback:</label><br>
              <input type="email" id="feedback_email" name="feedback_email"><br>
            </fieldset>
          </td>
          <td>
            <fieldset>
              <legend><strong>Event & Conference Booking</strong></legend>
              <label for="booking_email">Booking Email:</label><br>
              <input type="email" id="booking_email" name="booking_email">
            </fieldset>
          </td>
        </tr>
        <tr>
          <td>
            <fieldset>
              <legend><strong>Transportation Facilities</strong></legend>
              <label for="transportation_type">Transportation Type:</label><br>
              <input type="text" id="transportation_type" name="transportation_type" required>
            </fieldset>
          </td>
          <td>
            <fieldset>
              <legend><strong>Special Offers & Discounts</strong></legend>
              <label for="promotions_link">Discount:</label><br>
              <input type="text" id="promotions_link" name="promotions_link">
            </fieldset>
          </td>
        </tr>
      </table>
      <br>
      <button type="submit" name="submit">Update Configuration</button>
    </form>
  </fieldset>
  </center>
</body>
</html>
