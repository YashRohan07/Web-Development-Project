
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        

        table {
            border-collapse: collapse;
           
        }
        th, td {
            background-color: #59D5E0;
            border: 1px solid #59D5E0;
            padding: 5px;
        }

        fieldset{
            width: 400px;
            
        }
        
        .button {
           
            color: black;
           
            border-radius: 5px;
           
            
            font-size: 17px;
           
            text-decoration: none;
        }
    
    </style>
</head>
<body>
    <center>
        <fieldset>
        <div>
            <h1 class="profile-title"> Login as Admin </h1>
        </div>
        <form method="POST" action="../controller/AdminLoginCheck.php">
            <table border="1">
                <tr>
                    <td><b>Username:</b></td>
                    <td><input type="text" id="username" name="username" required></td>
                </tr>
                <tr>
                    <td><b>Password:</b></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Login"> </td>
                </tr>
                <tr>
                    <th></th>
                   
                    <td><a href="../view/ForgotPassword.php" class="button">Forgot Password</a></td>
                
                </tr>
            </table>
        </form>
    </fieldset>
    </center>
</body>
</html>
