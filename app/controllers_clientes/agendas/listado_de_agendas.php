<?php 
include '../../app/config.php';
$categoria = $_GET['categoria'];
$sql = "SELECT * FROM eventos where categoria = 'masajista' ";
$query = $pdo->prepare($sql);
$query->execute();
$eventos = $query->fetchAll(PDO::FETCH_ASSOC);


?>