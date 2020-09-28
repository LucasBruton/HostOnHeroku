<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Réalisations</title>
  <link rel="stylesheet" href="../css/realisations.css">
  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?Lemonada&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <h2>Mini-projet portfolio de Lucas Bruton</h2>
    <div class="menu">
      <a class="autre_page" href="/">Accueil</a>
      <a class="autre_page" href="/cv">CV</a>
      <a class="page_actuel" href="realisations">Réalisations</a>
      <a class="autre_page" href="/centre_interet">Centre d'intérêts</a>
      <a class="autre_page" href="contact">Contact</a>
    </div>
  </header>

  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <div class="overlay-content">
    <a href="#snake"><object data="../icone/snake_mobile.svg" type="image/svg+xml" class="svg_menu_mobile"></object>Snake</a>
    <a href="#sudoku"><object data="../icone/sudoku_mobile.svg" type="image/svg+xml" class="svg_menu_mobile"></object>Sudoku</a>
    <a href="#quizz"><object data="../icone/quizz_mobile.svg" type="image/svg+xml" class="svg_menu_mobile"></object>Site dynamique</a>
    </div>
  </div>

  <div class="sidebar">
    <a href="#snake"><object data="../icone/snake.svg" type="image/svg+xml" class="svg"></object>Snake</a>
    <a href="#sudoku"><object data="../icone/sudoku.svg" type="image/svg+xml" class="svg"></object>Sudoku</a>
    <a href="#quizz"><object data="../icone/quizz.svg" type="image/svg+xml" class="svg"></object>Site dynamique</a>
  </div>

 <span class="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<div class="centrer">
  <div class="contenu">
  
    <div class="sous-partie" id="snake">
      <div class="sous-sous-partie">
        <h1><object data="../icone/snake.svg" type="image/svg+xml" class="svg"></object>Snake</h1>
          <div class="illustr">
            <img src="../img/snake.png" alt="image Snake" class="illustration">
          </div>
      </div>   
      <div class="sous-sous-partie">
        <p>Jeu snake codé en C qui utilise la bibliographie graphique de l'IUT Sénart-Fontainebleau</p>  
      </div> 
      <div class="sous-sous-partie">
        <div class="bouttons">
          <a class="boutton" href="../download/CR_Snake.pdf" download><object data="../icone/download.svg" type="image/svg+xml" class="svg"></object>Télécharger le compte rendu</a> 
          <a class="boutton" href="https://github.com/LucasBruton/Snake"><object data="../icone/code.svg" type="image/svg+xml" class="svg"></object>Accès au Code Source</a> 
        </div>
      </div>
    </div>

    <div class="sous-partie" id="sudoku">
      <div class="sous-sous-partie">
        <h1><object data="../icone/sudoku.svg" type="image/svg+xml" class="svg"></object>Sudoku</h1>
          <div class="illustr">
            <img src="../img/sudoku.PNG" alt="image Sudoku" class="illustration">
          </div>
      </div>   
      <div class="sous-sous-partie">
        <p>Jeu sudoku codé en Java</p>  
      </div> 
      <div class="sous-sous-partie">
        <div class="bouttons">
          <a class="boutton" href="../download/CR_Sudoku.pdf" download><object data="../icone/download.svg" type="image/svg+xml" class="svg"></object>Télécharger le compte rendu</a> 
          <a class="boutton" href="https://github.com/LucasBruton/Sudoku"><object data="../icone/code.svg" type="image/svg+xml" class="svg"></object>Accès au Code Source</a> 
        </div>
      </div>
    </div>
      


    <div class="sous-partie" id="quizz">
      <div class="sous-sous-partie">
        <h1><object data="../icone/quizz.svg" type="image/svg+xml" class="svg"></object>Site dynamique</h1>
          <div class="illustr">
            <img src="../img/quizz.PNG" alt="image quizz" class="illustration2">
          </div>
      </div>   
      <div class="sous-sous-partie">
        <p>Site web dynmique créer en utilisant codeigniter qui permet de faire un quizz et d'y répondre.</p>  
      </div> 
      <div class="sous-sous-partie">
        <div class="bouttons">
          <a class="boutton" href="../download/CR_Quizz.pdf" download><object data="../icone/download.svg" type="image/svg+xml" class="svg"></object>Télécharger le compte rendu</a> 
          <a class="boutton" href="http://dwarves.iut-fbleau.fr/~bruton/projet_wims21/index.php/"><object data="../icone/quizz2.svg" type="image/svg+xml" class="svg"></object>Accès au site</a> 
        </div>
      </div>
    </div>
    </div>
  </div>
</div>


  <footer>
    <a class="contactes" href="mailto:lucas.bruton@etu.u-pec.fr">Mail</a>
    <a class="contactes" href="../download/CV Lucas.pdf" download>Télécharger CV</a>
    <a class="contactes" href="https://fr.linkedin.com/">Linkedin</a>
    <span class="legal">© Lucas Bruton 2019<img src="../img/logo_iut.jpg" alt="IUT Sénart-Fontainebleau" width="20" height="10" ></span>
  </footer>

  <script src="../js/overlay.js"></script>

</body>
</html>