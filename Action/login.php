<?php require_once "config.php"; 
$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(isset($_SESSION['user'])){ //je vérifie si l'utilisateur est connecté ou non
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}else{
    //non connecté
    echo "Utilisateur ou mot de passe incorrect !";
}

header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>