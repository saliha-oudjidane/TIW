
<?php
	$chaine_html = "<title>ceci est un titre de mon html</title>";
	$modele = '/<title>(.*)<\/title>/si';
	preg_match($modele,$chaine_html,$titre);
	echo $titre[1];


?>