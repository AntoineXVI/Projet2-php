<?php require_once "config.php"; ?>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
      <li><a id="black">Noir</a></li>
      <li><a id="white">Blanc</a></li>
      <li><a id="grey">Gris</a></li>
</ul>
<nav>
    <div class="nav-wrapper ">
    <a href="#!" class="brand-logo">Nos projets</a>
    <ul class="right hide-on-med-and-down">
        <li><a href="index.html"><i class="material-icons">home</i>Acceuil</a></li>
        <li><a href="project-1.html" target="_blank" >Projet 1</a></li>
        <li><a href="project-2.html" target="_blank">Projet 2</a></li>
        <li><a href="project-3.html" target="_blank">Projet 3</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Couleur<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
    </div>
</nav>
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img class="sidenav-img" src="../Projet2/img/idee1.jpg">
          </div>
          <a href="#name"><span class="white-text name">John Doe</span></a>
          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
      </li>
      <li><a class="waves-effect" href="index.html"><i class="material-icons">home</i>Acceuil</a></li>
      <li><a class="waves-effect" href="project-1.html" target="_blank">Projet 1</a></li>
      <li><a class="waves-effect" href="project-2.html" target="_blank">Projet 2</a></li>
      <li><a class="waves-effect" href="project-3.html" target="_blank">Projet 3</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Couleur<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>