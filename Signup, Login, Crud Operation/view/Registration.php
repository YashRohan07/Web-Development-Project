<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
        <h2>Registration</h2> 
        <form method="POST" action="../controller/SignupCheck.php">
            <table border="1">
                <tr>
                    <td>Id:</td>
                    <td><input type="text" id="id" name="id" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" id="confirm_password" name="confirm_password" required></td> <!-- Use different name for confirm password field -->
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td>User Type:</td>
                    <td>
                        <select name="usertype" id="usertype" required>
                            <option value="">Select User Type</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="Register">
                        <a href="../view/Login.php"><button type="button">Login</button></a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    </center>
</body>
</html>
