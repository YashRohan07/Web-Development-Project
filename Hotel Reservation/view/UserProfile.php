<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .profile-info {
            margin-top: 20px;
        }
        .profile-info p {
            margin-bottom: 10px;
        }
        .profile-picture {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
        }
    </style>
</head>
<body>
    <center>
    <div class="container">
        <h1>User Profile</h1>
        <div class="profile-picture">
            <!-- Replace 'user_image.png' with the path to the user's profile picture -->
            <img src="download.png" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <?php
            // User-specific information
            $userName = "Alex ";
            $userEmail = "a@gmail.com";
            $userPhone = "01234567890";
            $userAddress = "456 Elm Street, Dhaka, Bangladesh";

            // Displaying user profile information
            echo "<p><strong>Name:</strong> $userName</p>";
            echo "<p><strong>Email:</strong> $userEmail</p>";
            echo "<p><strong>Phone:</strong> $userPhone</p>";
            echo "<p><strong>Address:</strong> $userAddress</p>";
            ?>
        </div>
    </div>
    </center>
</body>
</html>
