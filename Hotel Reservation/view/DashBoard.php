<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <style>
      button {
            background-color: #59D5E0;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px 10px;
            margin-left: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body style="background-color:;">
<header style="display: flex; justify-content: space-between; align-items: center;">
    <div1 style="text-align: center;">
        <h2>BookNRelax: Instant Access To Hotel Reservation</h2>
    </div1>
    <div2>
    <nav style="display: flex;">
        <form action="About.php" method="get"><button type="submit" style="font-size: 20px;">About</button></form>
        <form action="View&Location.php" method="get"><button type="submit" style="font-size: 20px;">View Hotel&Location</button></form>
        <form action="signup.php" method="get"><button type="submit" style="font-size: 20px;">Signup</button></form>
        <form action="login.php" method="get"><button type="submit"  style="font-size: 20px;">Login as User</button></form>
        <form action="AdminLogin.php" method="get"><button type="submit"  style="font-size: 20px;">Login as Admin</button></form>
    </nav>
    </div2>
</header>

<div>
    <center>
        <img src="Picture.jpg" alt="Hotel Photo" style="width: 1000px; height: 800px" class="hotel-img">
    </center>
</div>
</body>
</html>
