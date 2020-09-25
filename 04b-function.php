<?php
// déclaration ne permettant plus à PHP de faire du transtypage, rend le langage strict
//declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les fonctions : révision et plus</title>
</head>
<body>
<?php

// comme la fonction est globale, on peut l'appeler avant sa création ! Si cette création a bien lieu et n'est pas conditionnelle
echo prems();
// ne fonctionne que parceque deums et crée dans prems qui est appelée à la ligne précédente
echo deums();

// mot clef function pour déclarer la fonction suivie d'un nom respectant les règles de nommage, suivie des (arg){action}
function prems(){
    function deums(){
        return "deums() : maintenant je suis déclarée et globale";
    }
    return "valeur de prems()<br>";
}
/* on ne peut rédéclarer une fonction (comme une constante), elle est donc globale
function prems(){

}*/

echo "<h2>avec un paramètre obligatoire</h2>";

// un paramètre qui peut prendre un argument de n'importe quel type
function ajoute($chaine){
    return $chaine .= "<hr>";
}
// faute car pas d'argument!
// echo ajoute();
echo ajoute("Bonjour");
// en concaténant (.=) le integer 8 avec le hr, il y a une conversion automatique qui est effectuée, elle se nomme transtypage, ici le résultat est de type string
echo ajoute(8);
// problème, si on impose pas le type de valeur, on peut avoir des erreurs ou des résultats inattendus transtypage impossible pour php
echo ajoute([1,2,3]);




// rendre une fonction plus stricte est souvent conseillé depuis PHP 7, car ça permet d'éviter certaines erreurs, mais également de filtrer certaines données, on peut utiliser en début de fichier: declare(strict_types=1); ou configurer le serveur pour que ça soit stricte

function majuscule(string $chaine){
    return ucfirst($chaine);
}

// contrairement à la fonction, les paramètres sont locaux (appartiennent à la fonction)
// echo $chaine;
echo majuscule("coucou les amis");
echo majuscule(5);
// echo $chaine;

echo "<h2>Paramètres multiples obligatoires</h2>";

// le nombre d'argument est obligatoirement 2
function multiplie($a,$b){
    return $a*$b;
}

// le nombre d'argument est obligatoirement 2
//echo multiplie(2);
echo multiplie(2,5);

echo "<h2>Paramètres multiples obligatoires et optionnels</h2>";

function calculatrice($a,$b,$c="+"){
    switch($c){
        case "+":
            return $a+$b;
        case "-":
            return $a-$b;
        case "*":
            return $a*$b;
        default:
            return $a/$b;
    }
}

echo calculatrice(17,3);
echo "<hr>";
echo calculatrice(17,3,"-");
echo "<hr>";
echo calculatrice(5.5,3,"*");

echo "<h2>Paramètres multiples au nombre non connu</h2>";

// grâce aux ... , $param est transformé en tableau par défaut
function addition(...$param){
    $total = 0;
    foreach($param as $nb){
        $total += $nb;
    }
    return $total;
}

echo addition();
echo "<hr>";
echo addition(5);
echo "<hr>";
echo addition(5,6);
echo "<hr>";
echo addition(5,6,10,100);
echo "<hr>";


echo "<h2>Fonctions récursives</h2>";
echo "<p>C'est une fonction qui s'appelle elle-même</p><h3>Permet de faire une boucle sans fonction de boucles</h3>";

function recursif($nb=0){
    $tab[] = $nb;
    if($nb<30){
        $tab[] = recursif($nb+1);
    }
    return $tab;
}
echo "<pre>";
var_dump(recursif());
echo "</pre>";

echo "<h2>Procédure avec paramètres et passage en référence - ce qui finalement revient à faire une fonction avec la variable mise en paramètre comme return</h2>";

function terminephrase(&$texte){
    $texte.=". Et c'est fini.";
}

$a="Bientôt la fin du cour";
terminephrase($a);

echo $a;

?>
</body>
</html>
