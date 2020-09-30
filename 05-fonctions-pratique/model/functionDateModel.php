<?php
// mettre la date du format datetime vers un format français
// Argument, un datetime : 2020-09-27 19:26:30
// résultat de la fonction : Le dimanche 27 septembre 2020 à 19h26
function functionDateModel($ladate){
    return "-".$ladate;
}