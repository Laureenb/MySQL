<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <form action="server.php" method="POST">
<table>
  <tr>
    <th>villes</th>
    <th>temperatures hautes</th>
    <th>temperatures basses</th>
    <th>Delete</th>
  </tr>
<?php

  while($donne=$resultat->fetch()){
  echo '<tr><td>';
  echo $donne['ville'];
  echo '</td><td>';
  echo $donne['haut'];
  echo '</td><td>';
  echo $donne['bas'];
  echo '</td><td>';
  echo '<input type="checkbox" name="delete[]" value=';
  echo $donne['ville'];
  echo '></td></tr>';

  };
  echo "<tr><td></td><td></td><td></td><td><input type='submit' name='supprimer'></td></tr>";


?>



<form action="serveur.php" method="post">

	<label for="ville">Quelle est votre ville?</label>
	<input type="text" name="ville"><br/><br/>

	<label for="bas">Quelle est la température minimale?</label>
	<input type="text" name="bas"><br/><br/>

	<label for="haut">Quelle est la température maximale?</label>
	<input type="text" name="haut"><br/><br/>

  	<input type="submit" value="Valider"/>

</form>

<!-- <form action="serveur.php" method="post">
	<label>Supprimer</label>


	<input type="hidden" name="action" value="act"/>
	<input type="submit" name="del" value="Valider"/>
</form> -->


</body>
</html>