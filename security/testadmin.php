<?php require_once "../config.php"; 
 
if (!isset($_SESSION[$user] ) || $_SESSION[$user][$admin] == 0 ){
    header('Location:index.php');//on le redirige sur la page d'accueil du site !
}
//faire ca pour toutes les actions
?>
