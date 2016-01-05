<?php
	/* Ce que j'avais commencé à faire sans avoir suivi les cours de PHP

	var towns = file_get_contents('source\towns.txt');
	var contenuArray = unserialize(towns);
	var nbtown = contenuArray.length;
	var compteur=0;
	var recherche='';
	var resultArray = []

	function automation(recherche) {
		for (var i=0; i < nbtown ; i++) {
				//code de recherche de valeur
				//code pour compter le nombre d'occurence
				//code pour remplir le tableau resultArray avec array_push
				//on trie le résultat avec sort
				//code construire le résultat avec un séparateur $ en concatenant avec implode()
			//on renvoie à js un echo()
		}
	}
	*/

//Version OpenClassRoom
    
	$data = unserialize(file_get_contents('source\towns.txt')); // Récupération de la liste complète des villes
	$dataLen = count($data);
	
	sort($data); // On trie les villes dans l'ordre alphabétique
	
	$results = array(); // Le tableau où seront stockés les résultats de la recherche
	
	// La boucle ci-dessous parcourt tout le tableau $data, jusqu'à un maximum de 10 résultats
	
	for ($i = 0 ; $i < $dataLen && count($results) < 10 ; $i++) {
	if (stripos($data[$i], $_GET['s']) === 0) { // Si la valeur commence par les mêmes caractères que la recherche
	
	array_push($results, $data[$i]); // On ajoute alors le résultat à la liste à retourner
	
	}
	}
	
	echo implode('|', $results); // Et on affiche les résultats séparés par une barre verticale |
	
?>