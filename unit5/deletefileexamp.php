<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletefile</title>
</head>
<body>
    <?php
    $filename = "filetodelete.txt";
    if (file_exists($filename)){
        unlink($filename);
        echo "file deleted successfully";
        }
        else{
            echo "the file doesn't exist";
        }
    ?>
</body>
</html>