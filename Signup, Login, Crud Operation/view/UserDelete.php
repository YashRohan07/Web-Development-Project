<?php
include '../model/database.php';

if(isset($_GET['id'])){
   $id = $_GET['id'];

   $con = dbConnect();
   $sql = "DELETE FROM data WHERE id=$id"; 
   $result = mysqli_query($con, $sql);

   if ($result) {
     // Redirect to the display page after successful deletion
     header('location: ../view/UserDisplay.php');
   } else {
     // Handle errors if deletion fails
     die(mysqli_error($con));
   }
}
?>