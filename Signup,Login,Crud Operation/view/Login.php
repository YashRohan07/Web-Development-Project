<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
  <style>
        fieldset{
            width:400px;
        }

        table {
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {
            background-color:#59D5E0;
            border: 1px solid #ddd;
            padding: 5px;
        }
    </style>
</head>
<body>
    <center>
        <fieldset>
        <div>
            <h1>LOGIN</h1>
        </div>
        <form method="POST" action="../controller/LoginCheck.php">
            <table border="1">
                <tr>
                    <td><b>User Id:</b></td>
                    <td><input type="text" id="text" name="id" required></td>
                </tr>
                <tr>
                    <td><b>Password:</b></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>

                <tr>
                    <th></th>
                    <td><input type="checkbox" id="remember_me" name="remember_me"><label for="remember_me">Remember Me</label></td>
                </tr>

                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="Login">
                        <a href="../view/Registration.php"><button type="button">Register</button></a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    </center>
</body>
</html>
