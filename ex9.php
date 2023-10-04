<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="number" name="nombre">
    <input type="submit" name="calculer" >

    </form >    
    <?php
    if (isset($_POST["nombre"]))
    {
    if (($_POST["nombre"]%3 ==0) && ($_POST["nombre"]%5 ==0))
    {
        echo " le nombre est divisible par 3 et 5";
    }
    else {
        echo " le nombre est non divisible par 3 et 5";
    }
}
    ?>
</body>
</html>