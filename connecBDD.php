<?php
function ConnectToBDD(){
	$dsn = 'mysql:dbname=pizzeria;host=localhost;charset=utf8';
	$user = 'root';
	$password = '';
	
	try
	{
		$pdo = new PDO($dsn, $user, $password);
		$pdo->setAttribute
		(
			PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION
		);
		return $pdo;
	}
	catch (PDOException $e)
	{
		echo 'Unable to connect : '.$e->getMessage();
	}
}
?>