<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Résultats du formulaire</title>
  <link rel="stylesheet" href="css/CV.css">
  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?Lemonada&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <h2>Mini-projet portfolio de Lucas Bruton</h2>
    <div class="menu">
      <a class="autre_page" href="/">Accueil</a>
      <a class="autre_page" href="/cv">CV</a>
      <a class="autre_page" href="realisations">Réalisations</a>
      <a class="autre_page" href="/centre_interet">Centre d'intérêts</a>
      <a class="autre_page" href="contact">Contact</a>
    </div>
  </header>


 <div class="centrer2">
  <div class="contenu">
@foreach($data as $resultat) 

  
    <div class="sous-partie" id="formation">
      <div class="sous-sous-partie">
          <h1>Entreprise : {{ $resultat->Entreprise }}</h1> 
          <p class="bloc_gauche">Nom</p>
          <p>{{ $resultat->Nom}}</p>
      </div>
      <div class="sous-sous-partie"> 
          <p class="bloc_gauche">Email</p>
          <p>{{ $resultat->Email }}</p>
      </div>      
    </div>
      <div class="sous-sous-partie"> 
          <p class="bloc_gauche">Message</p>
          <p>{{ $resultat->Message }}</p>
      </div>      

@endforeach
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