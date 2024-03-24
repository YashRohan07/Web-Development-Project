<?php 
session_start();

// Check if the user is logged in
if (!isset($_SESSION['flag'])) {
    header('location: Login.php');
    exit(); // Stop further execution
}

// Retrieve user data from the session
$name = $_SESSION['name'];
$usertype = $_SESSION['usertype'];

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
            <h1>Welcome To Home <br><?php echo $name; ?></h1>
            <table>
                <tr>
                    <?php if ($usertype == 'Admin') : ?>
                        <td><form action="../view/UserDisplay.php"><button type="submit">View Users</button></form></td>
                        <td><form action="../view/UserSearch.php"><button type="submit">Search Users</button></form></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td><form action="../view/Profile.php"><button type="submit">Profile</button></form></td>
                </tr>
                <tr>
                    <td><form action="../view/PassChange.php"><button type="submit">Change Password</button></form></td>
                </tr>
                <tr>
                    <td><form action="../controller/Logout.php"><button type="submit">Logout</button></form></td>
                </tr>
            </table>
        </fieldset>
    </center>
</body>
</html>
