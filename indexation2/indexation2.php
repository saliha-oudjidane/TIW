<?php 

//$chaine = "Bonjour tout le monde.  L'université de Paris8, est ouverte toute l'année";
//$lirefichier = fopen ("source.txt", "r"); 
//$chaine = fgets ($lirefichier, 255); 
//fclose($lirefichier);

$chaine =implode(file("source.txt"), " ");
$separateurs =". , ! ? ";

$tab_mots = explode_bis($separateurs, $chaine);

print_tab($tab_mots);

function explode_bis($separateurs , $chaine)
{

	$tab = array();
	
	$tok = strtok($chaine, $separateurs);

	if ( strlen ($tok) > 2 )  $tab[] = $tok;

	while ($tok !== false){

		$tok = strtok($separateurs);

		if ( strlen ($tok) > 2 )  $tab[] = $tok;

	}

	return $tab;

}

function print_tab ($tab){

	foreach ($tab as $indice => $mot)
		echo $indice, " : ", $mot, "<br>";
    

}
