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
    $a=10;
    $b=20;
    $var=$a-$b;
    switch ($var)
    {
        case 0 :
        {
            echo "$a egale a $b";
        }
        case $var>0:
        {
            echo "$a est sup a $b";
        }
        case $var<0:
        {
            echo "$a est inf a $b";
        }
    } 
    ?>
</body>
</html>