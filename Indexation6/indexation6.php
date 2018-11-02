<?php
	
	$source_html = "source.html";

	//Affichage du retour de la fonction
	echo get_body($source_html);

	//Extraction du body en texte
	function get_body($source_html)
		{

			$chaine_html = implode( file($source_html) , " ");

			$modele = '/body[^>]*>(.*)<\/body>/si';

			preg_match($modele, $chaine_html, $body);
			$chaine_texte = strip_tags($body[1]);
			return $chaine_texte;
		}

?>