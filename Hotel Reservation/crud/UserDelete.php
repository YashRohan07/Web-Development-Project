<?php
include 'DatabaseConnect.php';

if(isset($_GET['id'])){
   $id = $_GET['id'];

   $con = dbConnect();
   $sql = "DELETE FROM users WHERE id=$id"; // Corrected SQL query
   $result = mysqli_query($con, $sql);

   if ($result) {
     // Redirect to the display page after successful deletion
     header('location: UserDisplay.php');
   } else {
     // Handle errors if deletion fails
     die(mysqli_error($con));
   }
}
?>
