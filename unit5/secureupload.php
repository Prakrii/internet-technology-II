<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>secure upload</title>
</head>
<body>
 <form method="POST" enctype="multipart/form-data">
    <label>UPLOAD images HERE</label><br><br>
    <input type="file" name="image" required>
    <br><br>
    <input type="submit" name="submit" value="Submit">
 </form>

    <?php
    $uploadDir= __DIR__ . '/uploads/images/';
    if ($_SERVER['REQUEST_METHOD']==='POST') {

        if (isset($_FILES['image'])&& $_FILES['image']['error'] === 0){

            $allowedTypes = ['image/jpeg','image/png','image/gif'];
            if (in_array($_FILES['image']['type'], $allowedTypes)){
                $filename = basename($_FILES['image']['name']);
                $targetPath = $uploadDir . $filename;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                    echo 'File uploaded securely';
                }
                else {
                    echo "upload failed. check permissions.";
                }

                }
                else{
                    echo "ONLY IMAGES ARE ALLOWED";
                }

            }
        }

    

    
    ?>
    
</body>
</html>