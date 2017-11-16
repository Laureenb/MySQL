<?php

//la requête pour appeler la base de donnée
try{
	$pdo = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8'
// il faut rajouter le nom de la DB (juste avant le')
		,'user','user');
// pas obligatoire...
	// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
//au cas ou la base de données n'est pas appelée
catch(Exception $e){
	die("Connexion impossible, erreur : " .$e->getMessage());
}

//appeler la table meteo depuis la db
$requete = $pdo->query('SELECT* FROM meteo') ;

//recupérer toute la table meteo
$data = $requete->fetchAll();

//juste pour afficher la requête
// while ($data = $requete->fetch() ){
// 	echo $data['ville'];
// 	echo "<br/>";
// }

extract($_POST);

//initialisation des variables champs
$ville = isset($_POST['ville']) ? $_POST['ville'] : NULL; 
$villes = isset($_POST['villes']) ? $_POST['villes'] : NULL; 
$bas = isset($_POST['bas']) ? $_POST['bas'] : NULL; 
$haut = isset($_POST['haut']) ? $_POST['haut'] : NULL; 

//insertion de ces variables champs dans la query
$nvrequete = $pdo->query("INSERT INTO meteo(ville, bas, haut) VALUES ('$ville', '$bas', '$haut')");

//teste si la variable existe
if (isset($action)) {
	//teste le fait de cocher l'action 
	if ($action == "act") {
		//
		foreach ($villes as $vals) {
			$pdo->exec("DELETE FROM meteo WHERE ville = '$vals'");
		}
	}
}

//permet de fermer la requete pour éviter une boucle infinie
$requete->closeCursor();

?>

<form action="exercice.php" method="post">

	<label for="ville">Quelle est votre ville?</label>
	<input type="text" name="ville"><br/><br/>

	<label for="bas">Quelle est la température minimale?</label>
	<input type="text" name="bas"><br/><br/>

	<label for="haut">Quelle est la température maximale?</label>
	<input type="text" name="haut"><br/><br/>

  	<input type="submit" value="Valider"/>

</form>

<form action="exercice.php" method="post">
	<label>Supprimer</label>

<?php	

//crée la table 
echo "<table>";
foreach ($data as $val) {
	echo "<tr><td>{$val[0]}<input type='checkbox' name ='villes[]' value = {$val[0]}</td><td>$val[1]</td><td>$val[2]</td></tr>";
}
echo "</table>";

?>
	<input type="hidden" name="action" value="act"/>
	<input type="submit" name="del" value="Valider"/>
</form>

