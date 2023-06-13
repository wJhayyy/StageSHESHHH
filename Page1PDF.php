<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="page1.css">
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

  <div class="mr-40 mt-12">
    <h3 class="font-bold text-bleu text-right">Titre professionnel de niveau 4</h3>
    <h3 class="font-bold text-bleu text-right">Pole Formation UIMM</h3>
    <h3 class="font-bold text-bleu text-right">Champagne-Ardenne</h3>
  </div>

  <fieldset class="m-auto mt-56 p-8 w-11/12">
    <legend class="ml-8 pl-20 pr-20">Métier</legend>
    <p>
    À partir des consignes de son responsable hiérarchique, le technicien en usinage assisté par ordinateur a en charge
    la production de pièces réalisées par enlèvement de métal sur machines-outils à commande numérique (MOCN).
    Les matériaux usinés peuvent être également en plastique ou composite
    </p>
  </fieldset>

  <fieldset class="m-auto mt-8 p-8 w-11/12">
  <legend class="ld:ml-8 leading-10 ld:leading-none">Objectif de la formation</legend>
  <p>Etre capable de :</p>
  <ul class="liste-bleue ml-8">
    <li>Ordonnancer les opérations d'usinage et programmer un usinage sur tour à commande numérique</li>
    <li>Réaliser l'usinage de pièce unitaires ou de petites séries sur un tour à commande numérique</li>
    <li>Assurer le contrôle et la traçabilité d'une production de pièces usinées</li>
    <li>Ordonnancer les opérations d'usinage et programmer un usinage sur centre d'usinage</li>
    <li>Réaliser l'usinage de pièce unitaires ou de petites séries sur un centre d'usinage</li>
    <li>Préparer la production de nouvelles pièces sur un système de fabrication assistée par ordinateur</li>
    <li>Organiser et préparer le poste de travail pour la mise en production de nouvelles séries de pièces</li>
    <li>Stabiliser et lancer des productions en usinage de série sur machines-outils à commande numérique</li>
    <li>Suivre et optimiser le process de production en usinage de série</li>
  </ul>
</fieldset>

<fieldset class="m-auto mt-8 p-8 w-11/12">
  <legend class="ld:ml-8 leading-10 ld:leading-none pl-4 pr-8">Blocs de compétences</legend>
  <ul class="liste-bleue ml-8">
    <li>Réaliser, à partir d'un plan, l'usinage de pièce unitaires ou de petites séries sur tour à commande numérique</li>
    <li>Réaliser, à partir d'un plan, l'usinage de pièce unitaires ou de petites séries sur centre d'usinage</li>
    <li>Préparer et mettre au point des productions en usinage de série sur machines-outils à commande numérique</li>
  </ul>
</fieldset>

<div class="flex flex-col lg:flex-row w-11/12 m-auto mt-8">
  <div class="w-full lg:w-2/3 mr-12">
    <fieldset class="m-auto p-8 h-full">
      <legend class="ld:ml-8 leading-10 ld:leading-none pl-4 pr-8">Prérequis</legend>
      <ul class="liste-bleue ml-8">
        <li>Etre titulaire d'un diplôme ou d'une certification professionnelle de niveau 3 avec 6 mois minimum d'expérience professionnelle en usinage.</li>
        <li>Maîtrise des connaissances de base en arithmétique (règle de 3, fractions, calcul des volumes, surfaces, périmètre ...) et en dessin technique requise.</li>
      </ul>
      <p>D'autres situations sont envisageables et tous les dossiers seront examinés.</p>
    </fieldset>
  </div>
  <div class="w-full lg:w-1/3 h-full">
    <fieldset class="m-auto p-8">
      <legend class="ml-8 pl-4">Durée de la formation</legend>
      <p>A définir en fonction du profil de l'apprenant.</p>
    </fieldset>
    <fieldset class="m-auto p-8 mt-4">
      <legend class="ml-8 pl-4 pr-6">Tarifs</legend>
      <p>Sur devis auprès de votre conseiller relations clients.</p>
      <p>Pour les apprenants, formation gratuite et rémunérée.</p>
    </fieldset>
  </div>
</div>

<div class="flex flex-col w-full mt-8 justify-end items-end">
    <img class="w-24 mr-4 lg:mr-12" src="logouimm.png">
    <img class="w-24 mr-4 lg:mr-12" src="qualiopilogo.png">
</div>

</body>


</html>