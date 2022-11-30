<?php require_once "../config.php";

$sql = "UPDATE * FROM user WHERE id=:id "; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

?>