<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document VII</title>
</head>
<body>

    <?php
// todays date and time in GMT +2

    $date = date('Y,m,d , H:i:s A'); 
    
// this prints the default time in GMT+2
    echo "<p><strong>Date</strong> and <strong>Time</strong> in GMT+2</p>";
    print "<p>$date</p>";
//to change the time zone  
//date_default_timezone_set("continent/cityname")
    
    ?>
</body>
</html>