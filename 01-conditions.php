<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les conditions</title>
</head>
<body>
<h1>Révision : Les conditions</h1>
<h1>condition simple: if</h1>
<p>On verifie si 1 condition est remplie</p>
<?php
// on met dans une variable un entier entre 0 et 10 inclus
$hasard = mt_rand(0,10);

// on va vérifier si le chiffre au hasard est plus petit que 5
if($hasard<5){
    // variable entre simple '' n'est pas interprétée (affiche $hasard en tant que texte)
    echo '$hasard vaut '.
        // entre "" la variable est interprétée
        "$hasard et est donc plus petit que 5";

}

?>
<h1>condition sinon: else</h1>
<p>On verifie si 1 condition est remplie SINON (else) on effectue une autre action</p>
<?php
// on met dans une variable un entier entre 0 et 10 inclus
$hasard = mt_rand(0,10);

// on va vérifier si le chiffre au hasard est plus petit que 5
if($hasard<5){
    // variable entre simple '' n'est pas interprétée (affiche $hasard en tant que texte)
    echo '$hasard vaut '.
        // entre "" la variable est interprétée
        "$hasard et est donc plus petit que 5";

}

?>
</body>
</html>

