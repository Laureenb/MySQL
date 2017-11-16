<?php

//la requête pour appeler la base de donnée
try{
	$pdo = new PDO('mysql:host=localhost;dbname=;météo_db'
// il faut rajouter le nom de la DB (juste avant le')
		,'user','user');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
	die("Connexion impossible, erreur : " .$e->getMessage());
}

// pour créer la base de données
// CREATE DATABASE météo_db;

// pour créer une table
CREATE TABLE météo
    (`ville` varchar(9), `haut` int, `bas` int, `population` int, `jour_marché` varchar(9))
;

// pour insérer dans la table
INSERT INTO météo
    (`ville`, `haut`, `bas`, `population`, `jour_marché`)
VALUES
    ('Bruxelles', 27, 13, 1197983, 'dimanche'),
    ('Liège', 25, 15, 195965, 'vendredi'),
    ('Namur', 26, 15, 110175, 'mercredi' ),
    ('Charleroi', 25, 12, 204150, 'lundi'),
    ('Bruges', 28, 16, 117260, 'samedi')
;

// pour selectionner
// SELECT ville, population, jour_marché FROM Météo;

// pour afficher le résultat dans un tableau
// $donnees = $resultat->fetch();

?>