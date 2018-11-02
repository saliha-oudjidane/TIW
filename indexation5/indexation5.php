<?php
//inclusion des fonctions prédéfinies
include("bibliotheque5.inc.php");
//séparateurs de tokenisation
$separateurs =". , ! ? ";

//Fichier html a traiter 
$source_html = "source.html";

//récupération de keywords et le descriptif
$keywords_description = get_meta_keywords_description($source_html);

//recupération de titre
$titre = get_title($source_html);

//unification des chaines a traiteer 
$texte_head = $keywords_description." ".$titre;

//tokenisation des données head
$tab_mots = explode_bis($separateurs , $texte_head);

//affichage des résultats de traitemant
 print_tab($tab_mots);


?>