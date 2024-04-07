<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Search</title>
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
        <h2>User Search</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="search_id">Enter User ID:</label><br>
            <input type="text" id="search_id" name="search_id" required><br><br>
            <input type="submit" name="search" value="Search">
        </form>
        
<?php
require_once('../model/model.php');

if(isset($_POST['search'])){
    $search_id = $_POST['search_id'];
    
    $user = userSearch($search_id);
    
    if($user){
        // Display user information in a table format
        echo "<h2>User Information</h2>";
        echo "<table border='1'>";
        echo "<tr> <th>ID</th> <th>Name</th> <th>Email</th> <th>User Type</th> </tr>";
        echo "<tr>";
        echo "<td>" . $user['id'] . "</td>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td>" . $user['email'] . "</td>";
        echo "<td>" . $user['usertype'] . "</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "User not found!";
    }
}
?>

</fieldset>
</center>
</body>
</html>
