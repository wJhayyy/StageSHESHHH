<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="page2.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            bleu: '#009bcb',
          }
        }
      }
    }
  </script>

<body>

  <header class="header-bg">
      <h2 class="uppercase text-5xl text-white absolute z-10 -rotate-90 top-36 -left-24 font-bold hidden lg:block">Alternance</h2>
      <img class="object-cover img-entete rounded-r-full hidden lg:block" src="ordinateur-portable1.png">
      <h2 class="uppercase lg:text-right text-white pt-12 mr-8 text-center text-3xl">Titre Professionnel</h2>
      <h1 class="uppercase lg:text-right text-white mr-8 text-center text-2xl">Technicien en usinage assisté par ordinateur</h1>
      <h2 class="uppercase lg:text-right text-white mr-8 text-center text-2xl">RNCP35182</h2>
  </header>

  <div class="lg:mr-40 mt-12">
    <h3 class="font-bold text-bleu text-center lg:text-right">Titre professionnel de niveau 4</h3>
    <h3 class="font-bold text-bleu text-center lg:text-right">Pole Formation UIMM</h3>
    <h3 class="font-bold text-bleu text-center lg:text-right">Champagne-Ardenne</h3>
  </div>

  <div class="flex flex-col lg:flex-row w-11/12 m-auto mt-56">
  <div class="lg:w-9/12 lg:mr-12">
    <fieldset class="m-auto p-8 lg:h-full">
      <legend class="ld:ml-8 leading-10 ld:leading-none pl-4 pr-8">Programme</legend>
        <p class="text-xl">Programme en centre de formation :</p>
      <ul class="liste-bleue ml-8 mt-4 mb-4">
      <li>Lecture de plans</li>
        <li>Initiation / perfectionnement à la programmation ISO sur Commande Numérique</li>
        <li>Programmation conventionnelle</li>
        <li>Technologie concernant le tournage et le fraisage</li>
        <li>Gamme d'usinage</li>
        <li>Moyen de contrôles usuels et tridimensionnels</li>
        <li>Calcul professionnel</li>
        <li>Initiation à la CAO et à la DAO</li>
      </ul>
      <p class="text-xl">Programme en centre de formation :</p>
        <ul class="liste-bleue ml-8 mt-4 mb-4">
            <li>Réaliser un programme d'usinage</li>
            <li>Régler et conduire une machine-outil à commande numérique</li>
            <li>Réaliser le contrôle dimensionnel géométrique et d'état de surface des pièces produites</li>
            <li>Réaliser le suivi des pièces et corriger des dérives de production</li>
            <li>Résoudre des incidents matériels pouvant survenir en production</li>
            <li>Suivre des indicateurs de production et de qualité</li>
            <li>Effectuer les opérations de maintenance premier niveau</li>
        </ul>
    </fieldset>
  </div>
  <div class="lg:w-3/12 tarif-duree">
    <fieldset class="m-auto p-8 lg:h-full">
      <legend class="lg:pl-12 lg:pr-12">Outil pédagogiques</legend>
      <ul class="liste-bleue espace-pedago ml-8 mt-4 mb-4">
            <li>Salle de cours dédiées</li>
            <li>Plateaux techniques en lien avec la spécialité usinage</li>
            <li>Salle de cours avec équipements informatique</li>
            <li>Plateforme apprentissage e-learning</li>
        </ul>
    </fieldset>
  </div>
</div>


<fieldset class="m-auto mt-8 p-8 w-11/12">
  <legend class="ld:ml-8 leading-10 ld:leading-none pl-4 pr-8">Méthodes mobilisées</legend>
  <ul class="liste-bleue ml-8">
    <li>Positionnement et évaluation des acquis à l'entrée de la formation</li>
    <li>Alternance d'apports théorique, de cas pratiques, de mises en situation, réelles et/ou reconstituées</li>
    <li>Travaux pratiques sur applications transférables en entreprise</li>
    <li>Suivi individualisé</li>
    <li>Formation en présentiel et/ou en distanciel pour certains modules</li>
  </ul>
</fieldset>

<fieldset class="m-auto mt-8 p-8 w-11/12">
    <legend class="ml-8 pl-2 pr-4">Modalités d'évaluation</legend>
    <p>
    Les candidats sont présentés aux épreuves générales et techniques du Titre Professionel délivré par le Ministère du Travail.
    La certification vise à acquérir les blocs de compétences détaillés dans la fiche RNCS (possibilité de passage en CCP).
    </p>
  </fieldset>

<div class="flex flex-col w-full mt-8 justify-end items-end">
    <img class="w-24 mr-4 lg:mr-12" src="logouimm.png">
    <img class="w-24 mr-4 lg:mr-12" src="qualiopilogo.png">
</div>

</body>


</html>