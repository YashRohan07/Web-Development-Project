<?php
include '../model/model.php'; 

if(isset($_GET['id'])){
   $id = $_GET['id'];

   $result = deleteUser($id); // Call deleteUser function from model.php
   if ($result) {
     header('location: ../view/UserDisplay.php');
   } else {
     die("Error: Failed to delete user.");
   }
}
?>
