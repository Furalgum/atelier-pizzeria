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
	
	<h2>Création d'un client</h2>
	
	<form action="" method="get" >
		<div>
			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom" required>
		</div>
		<div>
			<label for="prenom">Prénom</label>
			<input type="text" name="prenom" id="prenom" required>
		</div>
		<div>
			<label for="ville">Ville</label>
			<input type="text" name="ville" id="ville" required>
		</div>
		<div>
			<label for="age">Age</label>
			<input type="text" name="age" id="age" required>
		</div>
		<div>
			<input type="submit" value="Ajouter">
		</div>
	</form>
</body>
</html>