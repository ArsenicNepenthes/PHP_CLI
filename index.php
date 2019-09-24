<?php
//ceci est un commentaire
echo "Hello world\n<br>";
echo "Bonjour le monde\n<br>";
/*
commentaire 
sur plusieurs 
lignes
*/
$prenom = "Cindy";
echo $prenom;
echo"\n";
$age = 31;
echo $age;
echo "\n<br>Bonjour $prenom, vous avez $age ans.";
echo "\n<br>".'Bonjour ' .$prenom.' , vous avez ' .$age.' ans';
echo"\n<hr>";
$nombre1 = 23;
$nombre2 = 42.45;
$resultat = 0;
$resultat = ($nombre1 + $nombre2) * 2;
echo $resultat;
echo "<hr>";
$tableau = array();
$tableau2 = [];
$tableau2[] = 'Cindy<br>';
$tableau2[] = 'Pierre';
$tableau2[] = 'Paul';
echo $tableau2[0];
if (empty($tableau2[0]))
{
    echo 'Cette entrée n\'existe pas !<br>';
}
else 
{
    echo $tableau2[0];
}
echo $tableau2[1];
echo $tableau2[2];


