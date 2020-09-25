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
