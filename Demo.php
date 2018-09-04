<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Démo PHP</title>
</head>
<body>

<ul>
   <?php
       $mysqli = new mysqli("localhost:3306", "root", "", "pizzeria");
       if ($mysqli->connect_errno) {
          echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
       }
       $res = $mysqli->query("SELECT * FROM client");
       while ($row = $res->fetch_assoc()) {
   ?>
              <li>
               <?php echo $row["id"]; ?> -  <?php echo $row["nom"]; ?>
              </li>
   <?php
       }
   ?>

</ul>


</body>
</html>