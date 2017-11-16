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


$db= new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'user', 'user');

if(isset($_POST['save'])){
  $ville=$_POST['ville'];
  $haut=$_POST['max'];
  $bas=$_POST['min'];
  $query="INSERT INTO Meteo (ville,haut,bas) VALUES ('$ville','$haut','$bas')";
  $db->query($query);
  header('location:index.php');
}

  if(isset($_POST['supprimer'])){

    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $delete) {
      $queryDel="DELETE FROM Meteo WHERE ville='$delete'";
        $db->query($queryDel);
      }
    }
    header('location:index.php');
  }


  $resultat=$db->query('SELECT * FROM Meteo');
 ?>
