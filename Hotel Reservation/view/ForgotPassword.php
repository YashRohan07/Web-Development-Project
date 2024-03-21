<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Password Change</title>

   
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
    </style>
   
   

</head>
<body>
<center>    
<fieldset>
<h2>Password Change</h2>
<form method="post" action="../model/ChangePassword.php">
    <table>
        <tr>
            <td><label for="code">Enter The Code:</label></td>
            <td><input type="text" id="code" name="code" required></td>
        </tr>
        <tr>
            <td><label for="password">New Password:</label></td>
            <td><input type="password" id="password" name="password" required></td>
        </tr>
        <tr>
            <td><label for="confirm_password">Confirm New Password:</label></td>
            <td><input type="password" id="confirm_password" name="confirm_password" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><button type="submit" name="submit">Change Password</button></td>
        </tr>
    </table>
</form>
</fieldset
</center>
</body>
</html>
