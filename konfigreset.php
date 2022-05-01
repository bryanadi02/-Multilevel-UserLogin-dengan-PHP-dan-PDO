<?php
try {
	$pdo = new PDO("mysql:dbname=logen;host=localhost", "root", "");
	

} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}