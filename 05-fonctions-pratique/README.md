# Projet pagination

## Pour commencer
- Installez la DB : datas/structure-donnees-articles.sql
- Renommez en local le fichier config.php.local en config.php

## Exercice 1
Créez une fonction dans model/functionDateModel.php nommée functionDateModel($date) qui aura pour argument un datetime: cette fonction doit nous renvoyer la date au format "Le lundi 28 septembre 2020 à 12h17"

Appelez cette fonction dans publicController.php

Aplliquez cette fonction sur $item["thedate"] dans la vue indexView.php