<?php

include_once('connectbdd.php');


// $connect = new Connect();

$stmt_competence = $connexion->prepare("SELECT id_competences, intitule_competences
                                      FROM competences
                                      ");
$stmt_competence->execute();
$all_competences = $stmt_competence->fetchAll(PDO::FETCH_ASSOC);

//die(var_dump($all_competences));

?>

<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="addbdd.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            bleu: '#009bcb',
            bleulogo: '#005b7e',
            rougelogo: '#e40114',
          }
        }
      }
    }
  </script>

<body>

<img class="w-28 mt-8 ml-16 mb-8" src="logouimm.png">

<div>

<!-- You only need to use the section that starts with bg-white to remove the bg and footer -->
<main class="flex justify-center items-center p-4 w-full">

  <div class="bg-white w-full sm:w-1/2 lg:w-9/12 border border-gray-200 divide-y divide-gray-200">
    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none text-white bg-bleulogo uppercase font-bold">Les formations et le parcours</summary>
      <div class="flex">
        <div class="flex flex-col w-3/6">

          <p class="font-bold ml-8 mt-4">Choisissez un domaine métier</p>
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Domaine Metier <svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>

          <p class="font-bold ml-8">Choisissez un diplôme</p>
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Diplôme <svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>
          <p class="font-bold ml-8">Choisissez un lieux</p>
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Lieux <svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>
          <p class="font-bold ml-8">Choisissez un parcours</p>
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Parcours <svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>
        </div>

        <div class="flex flex-col w-3/6">
  <div class="flex-grow">
    <p class="font-bold ml-8 mt-4">Intitulé du nouveau domaine métier</p>
    <div>
      <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-dom" name="name" required minlength="4" placeholder="Nouveau domaine">
      <button><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
    </div>
  </div>
  
  <div class="flex-shrink">
    <p class="font-bold ml-8 mt-4">Intitulé du nouveau parcours</p>
    <div>
      <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4 mb-4" type="text" id="new-dom" name="name" required minlength="4" placeholder="Ex : Boulangerie">
      <button><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
    </div>
  </div>
</div>

      </div>
    </details>

    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full text-white bg-bleulogo uppercase font-bold">Les blocs compétences</summary>
      <div class="flex">
        <div class="flex flex-col w-3/6">

        <p class="font-bold ml-8 mt-4">Choisissez le/les blocs de compétences</p>
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Bloc de compétences<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>
        </div>

        <div class="flex flex-col w-3/6">
          
        <p class="font-bold ml-8 mt-4">Intitulé du nouveau bloc(s) de compétences</p>
        <div>
        <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-dom" name="name" required minlength="4" placeholder="Ex : CAP Boulangerie"><button><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
        </div>
        </div>
      </div>
    </details>

    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none text-white bg-bleulogo uppercase font-bold">Les compétences</summary>
      <div class="flex">
        <div class="flex flex-col w-3/6">

        <p class="font-bold ml-8 mt-4">Choisissez la/les compétence(s)</p>
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Compétences<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>
        </div>

        <div class="flex flex-col w-3/6">
          
        <p class="font-bold ml-8 mt-4">Intitulé de la nouvelle compétence</p>
        <div>
        <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-dom" name="name" required minlength="4" placeholder="Ex : Travaux en groupe"><button><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
        </div>
        </div>
      </div>
    </details>

    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full text-white bg-bleulogo uppercase font-bold">Les objectifs operationnels</summary>
      <div class="flex">
        <div class="flex flex-col w-3/6">

        <p class="font-bold ml-8 mt-4">Choisissez le/les objectif(s) opérationnel(s)</p>
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Objectif(s) Opérationnel(s)<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>
        </div>

        <div class="flex flex-col w-3/6">
          
        <p class="font-bold ml-8 mt-4">Intitulé du nouveau objectif opérationnel</p>
        <div>
        <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-dom" name="name" required minlength="4" placeholder="Réaliser une maquette"><button><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
        </div>
        </div>
      </div>
    </details>

    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none text-white bg-bleulogo uppercase font-bold">Les objectifs pédagogique</summary>
      <div class="flex">
        <div class="flex flex-col w-3/6">

        <p class="font-bold ml-8 mt-4">Choisissez le/les objectif(s) pédagogique(s)</p>
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Objectif(s) Pédagogique(s)<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>
        </div>

        <div class="flex flex-col w-3/6">
          
        <p class="font-bold ml-8 mt-4">Intitulé du nouveau objectif pédagogique</p>
        <div>
        <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-dom" name="name" required minlength="4" placeholder="Remplacer une pièce de machine"><button><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
        </div>
        </div>
      </div>
    </details>

    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full text-white bg-bleulogo uppercase font-bold">Les activites</summary>
      <div class="flex">
        <div class="flex flex-col w-3/6">

        <p class="font-bold ml-8 mt-4">Choisissez la/les activité(s)</p>
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Activité<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>
        </div>

        <div class="flex flex-col w-3/6">
          
        <p class="font-bold ml-8 mt-4">Intitulé de la nouvelle activité</p>
        <div>
        <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-dom" name="name" required minlength="4" placeholder="Ex : Travail sur une perceuse"><button><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
        </div>
        </div>
      </div>
    </details>

  </div>

</main>

<div class="flex justify-end items-center mr-32 mt-8">
  <button class="inline-block px-4 py-2 text-bleulogo font-semibold border-2 border-bleulogo rounded-md hover:bg-bleulogo hover:text-white hover:border-green-700 focus:outline-none focus:ring focus:ring-green-100">
    Valider le formulaire
  </button>
</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>