<?php require_once "../config.php";

$sql = "UPDATE user SET name=:name WHERE id=:id"; 
$dataBinded=array(
    ':id'=> $_POST['id'],
    ':name'=> $_POST['name'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);

//header('Location:../admin.php');//on le redirige sur la page d'admin du site !
//exit();
?>