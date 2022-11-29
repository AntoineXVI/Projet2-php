<?php require_once "config.php"; 

$sql = "INSERT INTO user(email,name,password) VALUES(:email,:name,:password)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':name'   => $_POST['name'],
    ':password'=> $_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:index.php');//on le redirige sur la page d'accueil du site !
exit
?>