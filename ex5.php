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
    echo "<h1> calcul sur les variables </h1>";
    $tva=0.2;
    $prix=150;
    $nombre=10;
    $ht=$prix*$nombre;
    $ttc=$ht+($ht*0.2);
    echo "$ht <br> $ttc";
    
    ?>
</body>
</html>