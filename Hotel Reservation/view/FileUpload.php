<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
    <style>
        
        fieldset{
            background-color: #59D5E0;
            width: 100px;
        }
        </style>
</head>
<body style="text-align: center;">
    <center>
    <fieldset>
    <h2>Upload Files</h2>
    
    <form method="POST" action="FileReceive.php" enctype="multipart/form-data">
        <label for="myfile">Select a file:</label><br>
        <input type="file" id="myfile" name="myfile" style="margin-bottom: 10px;"><br>
        <input type="submit" name="upload" value="Upload File">
    </form>
</fieldset>
    </center>
</body>
</html>
