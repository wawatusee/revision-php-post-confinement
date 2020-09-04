<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explication sur le modulo</title>
</head>
<body>
<h1>%</h1>
<h3>Explication sur le modulo</h3>
<p>le modulo d'un chiffre nous donne le nombre d'éléments restant de la division euclidienne (derrière la virgule) après la division de celui-ci</p>
<p>On l'utilise régulièrement avec INT%2 pour savoir si un chiffre est pair ou impaire</p>
<h4>Exemple d'utilisation du modulo pour l'affichage de données tabulaires</h4>
<?php
// création d'un tableau de données que l'on souhaite afficher ligne par ligne
$donnees = ["Afghanistan","Afrique du Sud","Albanie","Allemagne","Bahreïn","Bangladesh"];
// on va utiliser le for et non le foreach, on a donc besoin du nombre d'entrée:
$nb = count($donnees);
?>

<p>
    <table align="left">
    <tr><td>Pays</td></tr>
    <?php
    // tant qu'on a des éléments dans le tableau
    for($i=0;$i<$nb;$i++){
        // utilisation d'une ternaire pour changer la couleur en cas de ligne paire ou impaire
        $couleur = ($i%2)?"#FFF":"#FFFF00";
        // affichage de la ligne avec la couleur
        echo "<tr><td style='background-color: $couleur'>$donnees[$i]</td></tr>";
    }
    ?>
</table>
</p>
<p>
<br>
<hr>
<?php
$a = 8;
$b = $a%2; // on divise par 8 et on regarde si il y a quelque chose après la virgule
$c = $a%3; // on divise 8 par 3 et on regarde combien on a d'éléments dans le cas de 8 / 3, on peut 2x 3 dedans = 6, il faut rajouter 2 pour arriver à 8
echo $b." | ".$c;
echo "<br>".($a/3);
?>
<hr>
</p>
</body>
</html>
