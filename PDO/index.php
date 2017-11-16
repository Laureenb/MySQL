<?php 

include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PDO</title>
</head>
<body>
  <form action="server.php" method="POST">
<table>
  <tr>
    <th>Villes</th>
    <th>Maxima</th>
    <th>Minima</th>
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

  echo "<tr><td></td><td></td><td></td><td><input type='submit' name='supprimer'value='delete'></td></tr>";

?>

</table>
</form>
<br><br>

<form action="server.php" method="POST">
  <input type="text" name="ville" placeholder="ville">
  <input type="number" name="max" placeholder="temp-max" >
  <input type="number" name="min" placeholder="temp-min" >
  <input type="submit" name="save" value="save">
</form>


</body>
</html>