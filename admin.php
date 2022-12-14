<!DOCTYPE html>
<?php require_once "config.php"; 

if(!isset($_SESSION['user']['admin']) || $_SESSION['user']['admin']==0){
  header('Location: index.php');
  exit();
}

?>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body id="color">

    <?php require "menu.php"; ?>
    <h2><a href='index.php' >retour index</a></h2>
    <h1>Liste des utilisateurs</h1>
    <?php
    $sql = "SELECT * FROM user"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($data as $user){ ?>
    <div class="bloc_user">
      <h2><?php echo $user['name'] ?></h2>
      <form method="post" action="action/update_user_name.php">
        <input type='name' name='name' placeholder="nouveau nom"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='Modifier' />
      </form>
      <span class="email"><?php echo $user['email'] ?></span>
      <form method="post" action="action/update_user_email.php">
        <input type='name' name='email' placeholder="nouvel email"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>" />
        <input type='submit' value='Modifier' />
      </form>
      <form method="post" action="action/delete_user.php" >
      <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
      <input type='submit' value='supprimer' />
    </form>
    </div>
    <?php } ?>

    <h1>Liste des projets</h1>

    <?php
    $sql = "SELECT * FROM projects"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($data as $projects){ ?>
    <div class="bloc_user">
      <h2><?php echo $projects['name'] ?></h2>
      <form method="post" action="action/update_projects.php">
        <input type='name' name='name' placeholder="nouveau nom"/>
        <input type='hidden' name='id' value=" <?php echo $projects['id'] ?>" />
        <input type='submit' value='Modifier' />
      </form>
      <span class="name"><?php echo $projects['h1'] ?></span>
      <form method="post" action="action/update_projects_title.php">
        <input type='name' name='h1' placeholder="nouveau titre"/>
        <input type='hidden' name='id' value="<?php echo $projects['id'] ?>"/>
        <input type='submit' value='Modifier' />
      </form>
      <form method="post" action="action/delete_projects.php" >
      <input type='hidden' name='id' value="<?php echo $projects['id'] ?>"/>
      <input type='submit' value='supprimer' />
    </form>
    </div>
    <?php } ?>

    
    <h1>creer un projet</h1>
    <form method="post" action="action/create_projects.php" enctype="multipart/form-data">
    <input type='name' name='name' placeholder="Entrez le nom" />
    <input type='name' name='h1' placeholder="Entrez un titre"/>
    <input type='name' name='text' value="null"/>
    <input type='file' name='img'/>
    <input type='submit' value='creer projet' />
    </form>


    <div class="carousel carousel-slider center">
      <div class="carousel-item background1 white-text" href="#one!">
        <h2>1er projet</h2>
        <p class="white-text">Clique pour voir notre 1er projet</p>
      </div>
      <div class="carousel-item background2 white-text" href="#two!">
        <h2>2eme projet</h2>
        <p class="white-text">Clique pour voir notre 2eme projet</p>
      </div>
      <div class="carousel-item background3 white-text" href="#three!">
        <h2>3eme projet</h2>
        <p class="white-text">Clique pour voir notre 3eme projet</p>
      </div>
    </div>
    <h2 class="title-index">A propos de nous :</h2>
    <div class="row">
      <div class="col antoine s3 offset-s2">
        <p>Pr??sentation de Antoine Pichard</p>
        <img class="presentation-antoine" src="../Projet2/img/photo-profil-antoine.png" alt="photo de profil antoine">
        <div class="row">
          <div class="col s12 m6 offset-m3">19ans</div>
          <div class="col s12 m6 offset-m3">Bac optenu en 2021</div>
          <div class="col s12 m6 offset-m3">?? fait une licence informatique</div>
          <div class="col s12 m6 offset-m3">Vit a Lyon</div>
          <div class="col s12 m6 offset-m3">Aime coder</div>
          <div class="col s12 m6 offset-m3">------------</div>
          <div class="col s12 m6 offset-m3"> Projet futurs :</div>
          <div class="col s12 m6 offset-m3"> Mon premier objectif est d??ja de reussir mes 3 premi??res ann??es ?? Gaming Campus, puis peut etre la 4eme et 5eme ann??e ensuite , et apres j'aimerai travailler ou participer ?? la cr??ation d'un jeu en ind??pendant ou avec une boite de jeux vid??o</div>
        </div>
      </div>
      <div class="col kyllian s3 offset-s2">
        <p>Presentation de Kyllian Tondu</p>
        <img class="presentation-kyllian" src="../Projet2/img/photo-profil-kyllian.png" alt="photo de profil kyllian">
        <div class="row">
          <div class="col s12 m6 offset-m3">18ans</div>
          <div class="col s12 m6 offset-m3">Bac optenu (mention bien)</div>
          <div class="col s12 m6 offset-m3">?? fait une ann??e sti2D </div>
          <div class="col s12 m6 offset-m3">Vit a Lyon</div>
          <div class="col s12 m6 offset-m3">Aime coder</div>
          <div class="col s12 m6 offset-m3">---------------</div>
          <div class="col s12 m6 offset-m3"> Projet futurs :</div>
          <div class="col s12 m6 offset-m3">Apres ma sortie de Gaming Campus j'envisage serieusement d'obtenir un poste dans un boite bas?? sur la cr??ation de jeu video. Ambitieux me diriez vous ? Oui mais ma motivation fait grandir cette ambition de vivre de ma passion et de r??aliser mon r??ve !</div>
        </div>
      </div>
    </div>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h2 class="white-text">Bas de Page</h2>
            <p class="grey-text text-lighten-4">Merci d'avoir ??t?? sur cette Page.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h2 class="white-text">Liens</h2>
            <ul>
              <li><a class="grey-text text-lighten-3"href="index.html">Acceuil</a></li>
              <li><a class="grey-text text-lighten-3" href="project-1.html" target="_blank">Projet 1</a></li>
              <li><a class="grey-text text-lighten-3" href="project-2.html" target="_blank">Projet 2</a></li>
              <li><a class="grey-text text-lighten-3" href="project-3.html" target="_blank">Projet 3</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          ?? 2022 Copyright Text
          <a class="grey-text text-lighten-4 right" href="https://en.wikipedia.org/wiki/Privacy_policy" target="_blank" >Privacy policy</a>
        </div>
      </div>
    </footer>
  </body>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</html>