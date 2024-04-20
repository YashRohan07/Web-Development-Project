<?php
  session_start();

  // Check if admin is logged in
  if(!isset($_SESSION['flag'])){
    header('location: AdminLogin.php');
    exit(); // Stop further execution
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../asset/AdminDashboard.css"/>

</head>
<body>
<div class="header">
  <form action="Dashboard.php" method="post">
    <button type="submit" class="home-button">Home</button>
  </form>
  <h1>Welcome <?php echo $_SESSION['username'];?>!</h1>
  <form action="AdminLogin.php" method="post">
    <button type="submit" class="logout-button">Logout</button>
  </form>
</div>



  <div class="content">
    <center>
      <fieldset>
        <table>
          <tr>
            <td><form action="../view/StaffDisplay.php"><button type="submit">Manage Staffs</button></form></td>
            <td><form action="../view/UserDisplay.php"><button type="submit">Manage Users</button></form></td>
          </tr>
          <tr>
            <td><form action="../view/RoomDisplay.php"><button type="submit">Manage Booking</button></form></td>
            <td><form action="../view/ServiceDisplay.php"><button type="submit">Manage Services</button></form></td>
          </tr>
          <tr>
            <td><form action="AdminProfile.php"><button type="submit">View Profile</button></form></td>
            <td><form action="EditProfile.php"><button type="submit">Edit Profile</button></form></td>
          </tr>
          <tr>
            <td><form action="FileUpload.php"><button type="submit">Upload Files</button></form></td>
            <td><form action="ChangePassword.php"><button type="submit">Change Password</button></form></td>
          </tr>
          
        </table>

      </fieldset>
    </center>
  </div>

</body>
</html>
