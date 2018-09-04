<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Accueil</title>
</head>
<body>
	
	<h1>Gestion des clients</h1>
	
	<h2>Création d'un client</h2>
	
	<form action="" method="post" >
		<table>
			<tr>
				<th><label for="nom">Nom</label></th>
				<td><input type="text" name="nom" id="nom" required></td>
			</tr>
			<tr>
				<th><label for="prenom">Prénom</label></th>
				<td><input type="text" name="prenom" id="prenom" required></td>
			</tr>
			<tr>
				<th><label for="ville">Ville</label></th>
				<td><input type="text" name="ville" id="ville" required></td>
			</tr>
			</tr>
				<th><label for="age">Age</label></th>
				<td><input type="text" name="age" id="age" required><td>
			</tr>
			<tr>
				<td><input type="submit" name="ajouter" value="Ajouter"></td>
			</tr>
		</table>
	</form>
	
	<?php
		require_once __DIR__ .'/connecBDD.php';
		
		if(isset ($_POST['ajouter'])){
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$ville=$_POST['ville'];
			$age=$_POST['age'];
			$sql='INSERT INTO client(nom,prenom,ville,age) VALUES(:nom,:prenom,:ville,:age)';
			$pdo = ConnectToBDD();
			$stmt = $pdo->prepare($sql);
			$stmt->execute([
				'nom' => $nom,
				'prenom' => $prenom,
				'age' => $age,
				'ville' => $ville
			]);
		}
		
		
	?>
	
</body>
</html>