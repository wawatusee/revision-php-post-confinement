<?php
// Dependencies
require_once "model/articlesModel.php";
require_once "model/functionDateModel.php";

$recupAll = articlesLoadAllResume($db);
// pas d'articles
if(!$recupAll){
    $erreur = "Pas encore d'article";
}

// view
require_once "view/indexView.php";