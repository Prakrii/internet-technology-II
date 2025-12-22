<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

<form method="POST" enctype="multipart/form-data">
    <label>UPLOAD files HERE</label><br><br>
    <input type="file" name="upload" required>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$message = "";
$uploaded_file = "";

if (isset($_POST['submit'])) {

    if (isset($_FILES['upload']) && $_FILES['upload']['error'] === 0) {

        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp  = $_FILES['upload']['tmp_name'];
        $file_type = $_FILES['upload']['type'];

        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

        if ($file_size > 2097152) {
            $message = "Error: File size exceeds 2 MB.";
        } elseif (!in_array($file_type, $allowed_types)) {
            $message = "Error: Only JPG, PNG, and GIF files are allowed.";
        } else {

            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }

            // Get file extension
            $ext = pathinfo($file_name, PATHINFO_EXTENSION);

            // Create new filename using date & time
            $new_name = date('Y-m-d_H-i-s') . '.' . $ext;

            // Destination path
            $destination = 'uploads/' . $new_name;

            if (move_uploaded_file($file_tmp, $destination)) {
                $message = "Upload successful!";
                $uploaded_file = $destination;
            } else {
                $message = "Error: Could not save the file.";
            }
        }

    } else {
        $message = "No file uploaded or upload error.";
    }
}
?>


<!-- Display message -->
<p><?php echo $message; ?></p>

<!-- Show uploaded image -->
<?php if ($uploaded_file): ?>
    <img src="<?php echo $uploaded_file; ?>" width="200">
<?php endif; ?>

</body>
</html>
