<?php

//******************************(1)************************ 
$a = 5 ;
if(is_integer($a) && ($a<10 && $a>5) && ($a%2==0) )
echo "VRAI" ; 
else echo "fAUX" ;
//  affiche faux

//*****************************(2)******************************* 
$b="TRUE";  
$c=FALSE;
echo($b AND $c)?1:0;
// affiche 0
echo ($b OR $c)?1:0;
//affiche 1

//********************************(3)*************************************
$nom=""; ; 
$sexe="M";
echo($nom=="")?"inconnu":$nom; 
// affiche inconnu
echo (($sexe=="F")?"Madame":"Monsieur");
//affiche monsieur

//********************************(4)******************************************
$nom= "Cherif";
echo $nom ?? "inconnu";
//affiche cherif
echo "bonjour".($prenom ??"inconnu") 
// affiche bonjourinconnu
echo "bonjour".($prenom ?? $nom ?? "inconnu")
//affiche bonjourCherif
?>