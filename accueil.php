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
   <h1>Pizzas</h1>
   <a href="gestionClients.php">Gestion des clients</a>
   <a href="gestionPizzas.php">Gestion des pizzas</a>
   <a href="gestionCommandes.php">Gestion des commandes</a>


</body>
</html>