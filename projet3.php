<!DOCTYPE html>
<html lang="en">
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
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
           <li><a id="black">Noir</a></li>
           <li><a id="white">Blanc</a></li>
           <li><a id="grey">Gris</a></li>
        </ul>
        <nav>
           <div class="nav-wrapper">
              <a href="#!" class="brand-logo">Nos projets</a>
              <ul class="right hide-on-med-and-down">
                <li><a href="index.html">Acceuil</a></li>
                <li><a href="project-1.html" target="_blank">Projet 1</a></li>
                <li><a href="project-2.html" target="_blank">Projet 2</a></li>
                <li><a href="project-3.html" target="_blank">Projet 3</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Couleur<i class="material-icons right">arrow_drop_down</i></a></li>
              </ul>
           </div>
        </nav>
        <h1 class="title-projet">Projet 3 : création d'un site Rocket League</h1>
        <div class="row">
            <div class="col img s3 offset-s2">
                <img class="dasri2" src="../Projet2/img/rl1.jpg" alt="image project-1 DASRI">
            </div>
            <div class="col text s3 offset-s2">text</div>
        </div>
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Bas de Page</h5>
                        <p class="grey-text text-lighten-4">Merci d'avoir été sur cette Page.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Liens</h5>
                        <ul>
              <li><a class="grey-text text-lighten-3" href="index.html">Acceuil</a></li>
                            <li><a class="grey-text text-lighten-3" href="project-1.html" target="_blank">Projet 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="project-2.html" target="_blank">Projet 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="project-3.html" target="_blank">Projet 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2022 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="https://en.wikipedia.org/wiki/Privacy_policy" target="_blank" >Privacy policy</a>
                </div>
            </div>
        </footer>
    </body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    </body>
   
</html>
