<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Accueil</title>
</head>
<body>
	
	<?php
		$mysqli = new mysqli("localhost:3306", "root", "", "pizzeria");
		if ($mysqli->connect_errno) {
			echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		} 
	?>
	
	<h1>Gestion des clients</h1>
	
	<a href="ajoutClient.php">Ajout</a>/<a href="accueil.php">Retour à l'accueil</a>
	
	<h2>Liste des clients</h2>
	
	<table width=60%>
		<tr>
			<th align=center>Id.</th>
			<th align=center>Nom</th>
			<th align=center>Prénom</th>
			<th align=center>Ville</th>
			<th align=center>Age</th>
		</tr>
	<?php
		$res = $mysqli->query("SELECT * FROM client");
		while ($row = $res->fetch_assoc()) {
	?>
		<tr>
			
			<td align=center><?php echo $row["id"]; ?></td>
			<td align=center><?php echo $row["nom"]; ?></td>
			<td align=center><?php echo $row["prenom"]; ?></td>
			<td align=center><?php echo $row["ville"]; ?></td>
			<td align=center><?php echo $row["age"]; ?></td>
			<td align=center>Modifier</td>
			<td align=center>Supprimer</td>
		</tr>	
		<?php
		}
		?>
	</table>

</body>
</html>