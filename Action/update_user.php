<?php require_once "../config.php";

$sql = "UPDATE name FROM user WHERE id=$_POST ['id']"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

?>