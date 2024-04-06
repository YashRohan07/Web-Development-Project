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
    <style>
         
        fieldset {
            width: 800px; 
            height: 500px;
            background-color: #59D5E0;
        }
        
        td {
            padding: 10px;
        }
        button {
            background-color: ;
            font-size: 20px;
            width: 200px;
            height: 50px;
        }
    </style>
</head>
<body>
    <center>
    <fieldset>
    <h1>Welcome To Admin Panel<br><?php echo $_SESSION['username']; ?></h1>
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
        <td><form action="AdminProfile.php"><button type="submit">Profile</button></form></td>
        <td><form action="Dashboard.php"><button type="submit">Home</button></form></td>
    </tr>
    <tr>
        <td><form action="FileUpload.php"><button type="submit">Upload Files</button></form></td>
        <td><form action="AdminLogin.php"><button type="submit">Logout</button></form></td>
    </tr>
    </table>

    </fieldset>
   </center>
</body>
</html>
