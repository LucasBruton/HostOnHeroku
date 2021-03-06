<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CV</title>
  <link rel="stylesheet" href="css/CV.css">
  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?Lemonada&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <h2>Mini-projet portfolio de Lucas Bruton</h2>
    <div class="menu">
      <a class="autre_page" href="/">Accueil</a>
      <a class="page_actuel" href="/cv">CV</a>
      <a class="autre_page" href="realisations">Réalisations</a>
      <a class="autre_page" href="/centre_interet">Centre d'intérêts</a>
      <a class="autre_page" href="contact">Contact</a>
    </div>
  </header>

  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <div class="overlay-content">
      <a href="#formation"><object data="../icone/education_mobile.svg" type="image/svg+xml" class="svg_menu_mobile"></object>Formation</a>
      <a href="#experience"><object data="../icone/professionelle_mobile.svg" type="image/svg+xml" class="svg_menu_mobile"></object>Expériences professionelle</a>
      <a href="#competences"><object data="../icone/competence_mobile.svg" type="image/svg+xml" class="svg_menu_mobile"></object>Compétences</a>
      <a href="#informations"><object data="../icone/info_mobile.svg" type="image/svg+xml" class="svg_menu_mobile"></object>Informations diverses</a>
    </div>
  </div>

  <div class="sidebar">
    <a href="#formation"><object data="../icone/education.svg" type="image/svg+xml" class="svg"></object>Formation</a>
    <a href="#experience"><object data="../icone/professionelle.svg" type="image/svg+xml" class="svg"></object>Expérience Professionelle</a>
    <a href="#competences"><object data="../icone/competence.svg" type="image/svg+xml" class="svg"></object>Compétences</a>
    <a href="#informations"><object data="../icone/info.svg" type="image/svg+xml" class="svg"></object>Informations diverses</a>
  </div>

 <span class="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<div class="centrer">
  <div class="contenu">
  
    <div class="sous-partie" id="formation">
      <div class="sous-sous-partie">
          <h1><object data="../icone/education.svg" type="image/svg+xml" class="svg"></object>Formation</h1> 
          <p class="bloc_gauche">2020-2021</p>
          <p>2e année de DUT informatique à l'IUT Sénart-Fontainebleau</p>
      </div>
      <div class="sous-sous-partie"> 
          <p class="bloc_gauche">Juin 2019</p>
          <p>Bac s - Mention Très Bien - Options Informatique et Latin - Lycée Viollet Le Duc, Villiers-Saint-Frédéric (78)</p>
      </div>      
    </div>

    <div class="sous-partie" id="experience">
      <div class="sous-sous-partie">
          <h1><object data="../icone/professionelle.svg" type="image/svg+xml" class="svg"></object>Expérience Professionelle</h1> 
          <p class="bloc_gauche">Août 2020</p>
          <ul class="principal">
            <li class="description_liste">Travail dans les vendanges</li>
          </ul>
      </div>
      <div class="sous-sous-partie"> 
          <p class="bloc_gauche">Juillet-août 2019</p>
          <ul class="principal">
            <li class="description_liste">Jobs d'été en Angleterre</li>
            <li class="competence_liste">Membre du staff de restauration du festival de Brighton</li>
            <li class="competence_liste">Restauration et service aux universit&s de Brighton</li>
          </ul>
      </div>
      <div class="sous-sous-partie">
          <p class="bloc_gauche">avril 2015</p>
          <ul class="principal">
            <li class="description_liste">Stage d'une d'une semaine de 3e en médiathèque</li>
            <li class="competence_liste">Acccuiel du public</li>
            <li class="competence_liste">Réception des ouvrages avec vérification</li>
            <li class="competence_liste">Rangement et classement</li>
          </ul>
      </div>     
    </div>    

    <div class="sous-partie" id="competences">
      <div class="sous-sous-partie">
          <h1><object data="../icone/competence.svg" type="image/svg+xml" class="svg"></object>Compétences</h1> 
          <p class="bloc_gauche">Compétences techniques</p>
          <ul class="principal">
            <li class="competence_liste">Programmation :</li>
            <li class="ul_secondaire"><ul> 
              <li>Impérative avec C</li>
              <li>Impérative avec Python</li>
            </ul></li>
            <li class="competence_liste">Administration : Scripting avec bash</li>
            <li class="competence_liste">Web : html/CSS</li>
            <li class="competence_liste">Base de Données : SQL sur Oracle</li>
            <li class="competence_liste">Bureautique : Word, Excel, Power Point</li>
          </ul>
      </div>
      <div class="sous-sous-partie">
          <p class="bloc_gauche">Langues</p>
          <ul class="principal">
            <li class="competence_liste">Anglais : langue maternelle </li>
            <li class="competence_liste">Français : bilingue</li>
            <li class="competence_liste">Allemand : niveau scolaire</li>
          </ul>
      </div>     
    </div>

    <div class="sous-partie" id="informations">
      <div class="sous-sous-partie">
        <h1><object data="../icone/info.svg" type="image/svg+xml" class="svg"></object>Informations diverses</h1> 
          <p class="bloc_gauche">Age</p>
          <p> 19 ans</p>
      </div>
      <div class="sous-sous-partie">
          <p class="bloc_gauche">Permis B</p>
          <p>depuis juin 2019</p>
      </div>
      <div class="sous-sous-partie">
          <p class="bloc_gauche">Engagement citoyen au collège</p>
          <ul class="principal">
            <li class="description_liste">Membre du CCJ de Leynes (71)</li>
            <li class="competence_liste">Organisation d'évènements dans la commune</li>
            <li class="competence_liste">Réunions mensuelles à la mairie avec le conseil municipal</li>
          </ul>
      </div>
      <div class="sous-sous-partie">
          <p class="bloc_gauche">Activités extra-scolaires</p>
          <ul class="principal">
            <li class="competence_liste">Karaté : 3ans</li>
            <li class="competence_liste">Badmintone : 3ans</li>
            <li class="competence_liste">Natation : 2ans</li>
            <li class="competence_liste">Théâtre : 3ans</li>
          </ul>
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