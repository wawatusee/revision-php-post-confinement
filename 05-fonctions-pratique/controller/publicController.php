<?php
// Dependencies
require_once "model/articlesModel.php";

$recupAll = articlesLoadAll($db);
// pas d'articles
if(!$recupAll){
    $erreur = "Pas encore d'article";
}