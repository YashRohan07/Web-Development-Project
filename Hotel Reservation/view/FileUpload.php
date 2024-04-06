<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
    <style>
      
        fieldset {
           width: 400px;
        }
        
    </style>
</head>
<body>
    <center>
        <fieldset>
            <h2>Upload Files</h2>
            <form method="POST" action="FileReceive.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th><label for="myfile">Select a file:</label></th> 
                        <td><input type="file" id="myfile" name="myfile"></td>
                    </tr>
                    <tr>
                       <td> </td>
                        <td style="text-align: center;">
                            <input type="submit" name="upload" value="Upload File">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>
</html>
