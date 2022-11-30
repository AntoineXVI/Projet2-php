<?php require_once "../config.php";

$sql = "UPDATE name FROM projects WHERE id=$_POST ['id']"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

?>