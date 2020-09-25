<?php

// création d'une fonction avec le mot clef function suivi du nom, les () sont obligatoires, même si ici nous n'avons pas de paramètre
function premiere(){
    // ceci est une variable locale dans laquelle on met le temps du serveur au format 'datetime'
    $date= date("Y-m-d H:i:s");
    // pour que ce soit une fonction et pas une procédure, on utilise return pour envoyer un résultat. Le return arrête la fonction
    return 'La variable $date vaut '."Le $date";
}
echo "<hr>";
echo premiere();
echo "<hr>";

// fonction avec un paramètre obligatoire, ici on souhaite un paramètre qui est un temps unix depuis le 1er janvier 1970 (en secondes)
function datesince($arg){
    return date("Y-m-d H:i:s",$arg);
}
echo "<hr>";
// ici on met le temps actuel du serveur avec time() en seconde
echo datesince(time());
echo "<hr>";
// exe logique 1

// ici le temps il y a une heure
echo datesince(time()-(60*60));
echo "<hr>";
// ici le temps il y a un semaine
echo datesince(time()-(60*60*24*7));
echo "<hr>";
// ici le temps dans un an, utilisation de strtotime qui essaie de transformer le temps avec les formats en Anglais
echo datesince(strtotime("+1 year"));
echo "<hr>";
// ici le temps dans 1 jour et 10 minutes
echo datesince(strtotime("+1 day 10 minutes"));
echo "<hr>";

// ici un paramètre est obligatoire, le deuxième ne l'est pas
function tempsFormat($format,$timestamp=1601027436){
    return date($format,$timestamp);
}

echo "<hr>";
echo tempsFormat("H-m-d H:i:s");
echo "<hr>";
echo tempsFormat("Y-m-d H:i:s");
echo "<hr>";
echo tempsFormat("Y-m-d H:i:s",time());
echo "<hr>";