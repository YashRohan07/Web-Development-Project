<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Profile</title>
    <style>
         
       
   
        table {
           
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {
            background-color: #59D5E0;
            border: 1px solid #ddd;
            padding: 5px;
        }
    </style>
</head>
<body>
    <center>
    <div>
        <h1 class="profile-title">User Profile</h1>
    </div>
   
    <form method="get" action="../controller/SignUpCheck.php" enctype="">
       
        <table border="1">
           
            <tr>
                <td>Username:</td>
                <td><input type="text" id="username" name="username" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
 
            <tr>
                <td>Password:</td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
 
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" id="dob" name="dob" required></td>
            </tr>
 
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" id="phone" name="phone" required></td>
            </tr>
 
            <tr>
                <td>Gender:</td>
                <td>
                    <label for="gender_male"><input type="radio" id="gender_male" name="gender" value="male"> Male</label>
                    <label for="gender_female"><input type="radio" id="gender_female" name="gender" value="female"> Female</label>
                    <label for="gender_other"><input type="radio" id="gender_other" name="gender" value="other"> Other</label>
                </td>
            </tr>
           
            <tr>
                <td>Blood Group:</td>
                <td>
                    <select id="blood_group" name="blood_group" required>
                        <option value="">Select</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </td>
            </tr>
           
 
            <tr>
                <th></th>
                <td><input type="submit" value="Submit"> <input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>