<?php
// Dependencies
require_once "model/articlesModel.php";
require_once "model/functionDateModel.php";
require_once "model/cutTheTextModel.php";
// Pagination
require_once "model/paginationModel.php";

// Mise en place de la pagination

// existence de la variable get "pg" | toujours 1 par défaut
if(isset($_GET['pg'])){
    $pgactu = (int) $_GET['pg'];
    // si la conversion échoue ($pgactu===0)
    if(!$pgactu) $pgactu=1;
}else{
    $pgactu = 1;
}
// calcul pour la requête - nombre d'articles totaux, sans erreurs SQL ce sera toujours un int, de 0 à ..., on peut récupérer la valeur nb en traitant cette fonction comme un tableau (ne fonctionne que si le résultat du de la fonction est un tableau)
$nbTotalArticles = countAllArticles($db)["nb"];

// Calcul pour avoir la première partie du LIMIT *, 10 dans la requête stockée dans articlesModel.php nommée articlesLoadResumePagination()
$debut_tab = ($pgactu-1)*NUMBER_ARTICLE_PER_PAGE;

// requ^te avec le LIMIT appliqué
$recupPagination = articlesLoadResumePagination($db,$debut_tab,NUMBER_ARTICLE_PER_PAGE);

// pas d'articles
if(!$recupPagination){
    $erreur = "Pas encore d'article";
}else {
    // nous avons des articles, création de la pagination si nécessaire
    $pagination = paginationModel($nbTotalArticles, $pgactu, NUMBER_ARTICLE_PER_PAGE);
}

// view
require_once "view/indexView.php";