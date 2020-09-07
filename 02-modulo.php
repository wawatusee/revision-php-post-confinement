<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explication sur le modulo</title>
    <style>div{display: flex}</style>
</head>
<body>
<h1>%</h1>
<h3>Explication sur le modulo</h3>
<p>le modulo d'un chiffre nous donne le nombre d'éléments restant de la division euclidienne (derrière la virgule) après la division de celui-ci</p>
<p>On l'utilise régulièrement avec INT%2 pour savoir si un chiffre est pair ou impaire</p>
<h4>Exemple d'utilisation du modulo pour l'affichage de données tabulaires</h4>
<?php
// création d'un tableau de données que l'on souhaite afficher ligne par ligne
$donnees = ["Afghanistan","Afrique du Sud","Albanie","Allemagne","Bahreïn","Bangladesh","Belgique","France","Italie","USA","Tanzanie","japon","Canada","Amérique","Ouganda","Palaos","Bulgarie","Qatar","Ukraine","Laos","Kiribati","Grèce","Gabon","Panamá",];

// on va utiliser le for et non le foreach, on a donc besoin du nombre d'entrée:
$nb = count($donnees);
?>

<div>
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
</div>
<div>
    <h3>Fonctionnement du modulo</h3>
    <p>Le modulo va nous donner le reste d'une division euclidienne <a href="https://fr.wikipedia.org/wiki/Modulo_(op%C3%A9ration)" target="_blank">wikipédia</a>, et donc pas nécessairement 1 ou 0 ! </p>
    <code>
        1) 4%2 => 0 car 4/2 = 2 => pas de reste de division<br>
        2) 5%2 => 1 car 5/2 = 2.5 => on a un reste (des chiffres après la virgule) parceque 2X2 = 4 pour arriver à 5 on doit ajouter 1<br>
        3) 8%3 => 2 car 8/3 = 2.66666666667 => le reste de 3x2 = 6 il faut ajouter 2 pour arriver à 8
        4) 25%10 => 5 car 25/10 = 2.5 => mais le reste c'est le nombre de x que l'on peut mettre 10 dans 25 (2x) => 2x10 => 20, on doit ajouter 5 pour arriver à 25<br>
        5) 300%7 => 6 car 300/7 = 42.8571428571 => on peut mettre 42x 7 dans 300 => 294, pour arriver à 300 => 294+6=300


    </code></div><div>
<hr>
    <br><h3>Exercice</h3>
    <p>En utilisant le tableau $donnees et $nb, affichez grâce au modulo 1 ligne sur 3 en jaune, 2 lignes sur 3 en blanc (1 jaune, 2 blancs, etc....) Uttilisez le for comme l'exemple ci-dessus</p>
    <br>
</div>
    <div>
        <table align="left">
            <tr><td>Pays</td></tr>
            <?php
            // tant qu'on a des éléments dans le tableau
            for($i=0;$i<$nb;$i++){
                // utilisation d'une ternaire pour changer la couleur en cas de ligne paire ou impaire
                $couleur = ($i%3)?"#FFF":"#FFFF00";
                // affichage de la ligne avec la couleur
                echo "<tr><td style='background-color: $couleur'>$donnees[$i]</td></tr>";
            }
            ?>
        </table>
    </div>

    <hr>
    <br><h3>Exercice 2</h3>
    <p>En utilisant le tableau $donnees et $nb, affichez 1 ligne en bleu, 1 ligne en blanc et 1 ligne en rouge,  Uttilisez le for comme l'exemple ci-dessus, par contre l'utilisation du modulo n'est pas obligatoire (plus compliqué)</p>
    <br>
    <div>
        <table align="left">
            <tr><td>Pays</td></tr>
            <?php
            // tant qu'on a des éléments dans le tableau
            for($i=0;$i<$nb;$i++){
                // pour faire une ternaire dans une ternaire, il faut utiliser les () pour isoler la ternaire d'une autre. pour obtenir la première couleur j'ai fait un modulo 3 inversé, suivi d'un modulo 3 de la valeur augmentée de 1
                $couleur = !($i%3)?"#0363FD":((($i+1)%3)?"#FFF":"#FF0000");
                // merci Karim pour cette solution alternative, il utilise un modulo 2 puis un modulo 4 pour faire la même
                $couleur = ($i%2)?" #FFFFFF":(($i%4) ?"#FF0000":"#0363FD");

                // affichage de la ligne avec la couleur
                echo "<tr><td style='background-color: $couleur'>$donnees[$i]</td></tr>";
            }
            ?>
        </table>
    </div>
<hr>
<br><h3>Exercice 3</h3>
<p>En utilisant le tableau $donnees et $nb, affichons autant de couleurs que souhaitées en partant du tableau ci-dessous et en utilisant le modulo (si possible)</p>
<br>
<div>
    <table align="left">
        <tr><td>Pays</td></tr>
        <?php
        // codes couleurs souhaités dans l'order
        $color = ["#FFFFFF","#0363FD","#FF0000","pink","yellow"];
        // nombre de couleur (va être utile au modulo)
        $nbcolor = count($color);
        // tant qu'on a des éléments dans le tableau
        for($i=0;$i<$nb;$i++){
            // sur cette ligne on peut rendre l'attribution des couleurs fonctionnelle en utilisant le tableau $color et en y mettant la valeur de $i modulo le nombre de couleurs $nbcolor
            $couleur = $color[$i%$nbcolor];

            // affichage de la ligne avec la couleur
            echo "<tr><td style='background-color: $couleur'>$donnees[$i] | index du tableau donnees i vaut $i | modulo pour obtenir la clef de color => ($i%$nbcolor) ".$i%$nbcolor."</td></tr>";
        }
        ?>
    </table>
</div>
</div>
</body>
</html>
