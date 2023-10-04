<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post"> 
        <input type="number" name="a">
        <input type="number" name="b">
        <input type="submit" name="calculer">
    

    </form>
    <?php
    if (isset($_POST["a"]) && isset($_POST["b"]))
    {$a=$_POST["a"];
        $b=$_POST["b"];
        $res=$a+$b;
        echo "$res";
    }
    ?>
    
    
</body>
</html>