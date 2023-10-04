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
    if ($_POST["nombre"]%2 ==0)
    {
        echo " le nombre est pair";
    }
    else {
        echo " le nombre est impair";
    }
}
    ?>
</body>
</html>