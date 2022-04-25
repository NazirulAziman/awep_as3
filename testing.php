<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $waiting_day = 1637210196;
        $time_left = $waiting_day - time();
    
        $days = floor($time_left / (60*60*24));
        $time_left %= (60 * 60 * 24);
    
        $hours = floor($time_left / (60 * 60));
        $time_left %= (60 * 60);
    
        $min = floor($time_left / 60);
        $time_left %= 60;
    
        $sec = $time_left;
    
        echo "Remaing time: $days days and $hours hours and $min min and $sec sec left";
    ?>
</body>
</html>