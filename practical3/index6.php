<!-- 6. Convert the string `"tag1,tag2,tag3"` to an array and back to `"tag1 | tag2 | tag3"` -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.6</title>
</head>
<body>
    <?php


        $str = "tag1,tag2,tag3";

        echo "at start => $str <br>";

        // Convert string to array

        $arr = explode(",", $str);

        // Convert array back to formatted string

        $result = implode(" | ", $arr);

        echo "after => $result";      // tag1 | tag2 | tag3

    ?>
</body>
</html>