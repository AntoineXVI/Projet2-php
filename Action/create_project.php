<?php require_once "../config.php"; 

$sql = "INSERT INTO projects(name,h1,img) VALUES(:name,:h1,:img)";
$dataBinded=array(
    ':name'=> $_POST['name'],
    ':h1'=> $_POST['h1'],
    ':img'=> $_POST['img'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//header('Location:../admin.php');//on le redirige sur la page d'admin du site !
//exit();
?>