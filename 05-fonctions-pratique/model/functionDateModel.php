<?php
// mettre la date du format datetime vers un format français
// Argument, un datetime : 2020-09-27 19:26:30
// résultat de la fonction : Le dimanche 27 septembre 2020 à 19h26
function functionDateModel($ladate){
    $string = "le ";
    // convert to unix time
    $timeUnix = strtotime($ladate);

    // transtypage error
    if(!$timeUnix) return "unknow date error";

    // index array with day in french
    $tab_jour = ["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"];

    $string.= $tab_jour[date("w",$timeUnix)];
    $string.= " ".date("d",$timeUnix);

    // index array with month in french
    $tab_mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];

    $string .= " ".$tab_mois[date("n",$timeUnix)-1];

    $string .= " ".date("Y",$timeUnix);
    $string .=" à ";
    $string .= date("H\hi",$timeUnix);

    return $string;
}