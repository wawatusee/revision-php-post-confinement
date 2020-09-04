<?php

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3>Explication sur le modulo</h3>
<p>le modulo d'un chiffre nous donne le nombre d'éléments derrière la virgule après la division de celui-ci</p>
<hr>
<?php
$a = 8;
$b = $a%2; // on divise par 8 et on regarde si il y a quelque chose après la virgule
$c = $a%3; // on divise 8 par 3 et on regarde combien on a d'éléments dans le cas de 8 / 3, on peut 2x 3 dedans = 6, il faut rajouter 2 pour arriver à 8
echo $b." | ".$c;
echo "<br>".($a/3);
?>
<hr>
</body>
</html>
