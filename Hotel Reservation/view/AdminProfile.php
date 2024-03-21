<?php
require_once '..\model\adminDatabase.php';

// Establish database connection
$con = dbConnect();

// Define your SQL query here or remove this line if not needed
$sql = "SELECT * FROM admins";

// Execute the SQL query
$result = mysqli_query($con, $sql);

// Close database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <style>
         body{
           background-color:#B5C0D0;
        }

        fieldset{
            background-color: #ACE2E1;
            width: 40px;
        }
        
    </style>
</head>
<body>
    
    <center>
    <fieldset>
    <div style="width: 500px;">
        <h1 style="text-align: center;">Admin Profile</h1>
        <div style="text-align: center;">
            <img src="Adminphoto.png" alt="Profile Picture" style="width: 150px; height: 150px;">
        </div>
        <div style="margin-top: 20px;">
            <?php
            require_once '../model/adminDatabase.php';

            // Connect to database using the function
            $con = dbConnect();

            // Fetch admin profile information from database
            $query = "SELECT username, password, email FROM admins";
            $result = mysqli_query($con, $query);

            // Check if query executed successfully
            if ($result) {
                // Fetching the first row from the result set
                $row = mysqli_fetch_assoc($result);

                // Displaying admin profile information
                echo "<p><strong>Username:</strong> " . $row['username'] . "</p>";
                echo "<p><strong>Password:</strong> " . $row['password'] . "</p>";
                echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
            } else {
                echo "Error fetching admin profile information: " . mysqli_error($con);
            }

            // Dummy values for other information
            $adminRole = 'Administrator';
            $adminPhone = '01738360521';
            $adminAddress = 'Dhaka, Bangladesh';

            // Displaying dummy admin profile information
            echo "<p><strong>Role:</strong> $adminRole</p>";
            echo "<p><strong>Phone:</strong> $adminPhone</p>";
            echo "<p><strong>Address:</strong> $adminAddress</p>";

            // Close database connection
            mysqli_close($con);
            ?>
        </div>
    </div>
        </fieldset>
    </center>
</body>
</html>
