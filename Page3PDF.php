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
  <div class="lg:w-1/3 lg:mr-4">
    <fieldset class="m-auto p-8 lg:h-full">
      <legend class="ld:ml-8">Validation à l'issue de la formation</legend>
        <p>Certification professionnelle du Ministère Chargé de l'Emploi Titre professionnel Technicien en Usinage Assisté par Ordinateur (Niveau 4).</p>
    </fieldset>
  </div>
  <div class="lg:w-1/3 lg:mr-4">
    <fieldset class="m-auto p-8 lg:h-full">
      <legend class="lg:pl-12 lg:pr-12">Taux de réussiste</legend>
      <p>Consulter la fiche internet sur 
        <br>
      <a class="text-blue-700" href="#" target="_blank">Supprimer quand lien mis</a></p>
    </fieldset>
  </div>
  <div class="lg:w-1/3">
    <fieldset class="m-auto p-8 lg:h-full">
      <legend class="lg:pl-12 lg:pr-12">Accès à la fiche RNCP</legend>
      <p>(Répertoire Nationnal des Certifications Professionnelles) 
        <br>
      <a class="text-blue-700" href="#" target="_blank">Supprimer quand lien mis</a></p>
    </fieldset>
  </div>
</div>

<div class="flex flex-col lg:flex-row w-11/12 m-auto mt-16 lg:mt-8">
  <div class="lg:w-7/12 lg:mr-4">
    <fieldset class="m-auto p-8 lg:h-full">
      <legend class="ld:ml-8">Débouchés professionnels</legend>
        <p>Le / la Titulaire du Titre Pro TUAO peut exercer ses activités comme : Opérateur / Régler, Technicien d'atelier, Technicien d'usinage (en tournage,fraisage,rectification).</p>
    </fieldset>
  </div>
  <div class="lg:w-5/12">
    <fieldset class="m-auto p-8 lg:h-full">
      <legend class="lg:pl-4 lg:pr-4">Poursuites d'études au Pôle formation</legend>
      <p>BTS Conception des Processus de Réalisation des Produits (BTS CRPR)</p>
    </fieldset>
  </div>
</div>

<fieldset class="m-auto mt-8 p-8 w-11/12">
  <legend class="ld:ml-8 leading-10 ld:leading-none pl-4 pr-8">Modalités et délai d'accès</legend>
  <ul class="liste-bleue ml-8">
    <li>Dépôt du dossier d'inscription complet (inscription sur le site internet de l'établissement)</li>
    <li>Admissibilité par le centre de formation dans les 15 jours suivant le dépôt du dossier d'inscription</li>
    <li>L'admission définitive sera soumise à la signature du contrat avec une entreprise</li>
    <li>Rentrée : tout au long de l'année</li>
  </ul>
</fieldset>

<fieldset class="m-auto mt-8 p-8 w-11/12">
    <legend class="ml-8 lg:pl-20 lg:pr-20">Accessibilité aux personnes en situation de handicap</legend>
    <p>
    Formation ouverte aux personnes en situation de handicap.
    </p>
    <p>
    Moyens de compensation à étudier avec le référent handicap du centre concerné.
    </p>
</fieldset>

<div class="flex w-11/12 justify-center m-auto lg:justify-end">
    <fieldset class="mt-8 p-8 w-fit">
        <legend class="">Date de mise à jour</legend>
        <p class="text-center">
        13/06/2023
        </p>
    </fieldset>
</div>

<div class="flex flex-col w-full mt-8 justify-end items-end">
    <img class="w-24 mr-4 lg:mr-12" src="logouimm.png">
    <img class="w-24 mr-4 lg:mr-12" src="qualiopilogo.png">
</div>

</body>


</html>