<?php

include_once('connectbdd.php');


// $connect = new Connect();

$stmt_competence = $connexion->prepare("SELECT id_competences, intitule_competences
                                      FROM competences
                                      ");
$stmt_competence->execute();
$all_competences = $stmt_competence->fetchAll(PDO::FETCH_ASSOC);

$stmt_objop = $connexion->prepare("SELECT id_objectifs_operationnels, intitule_objectifs_operationnels
                                      FROM objectifs_operationnels
                                      ");
$stmt_objop ->execute();
$all_objop = $stmt_objop ->fetchAll(PDO::FETCH_ASSOC);

$stmt_peda = $connexion->prepare("SELECT id_objectifs_pedagogiques, intitule_objectifs_pedagogiques
                                      FROM objectifs_pedagogiques
                                      ");
$stmt_peda->execute();
$all_objpeda = $stmt_peda->fetchAll(PDO::FETCH_ASSOC);

$stmt_act = $connexion->prepare("SELECT id_activites, intitule_activites
                                      FROM activites
                                      ");
$stmt_act ->execute();
$all_act = $stmt_act->fetchAll(PDO::FETCH_ASSOC);


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
      <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-dom" name="new-parcours" required minlength="4" placeholder="Nouveau domaine">
      <button><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
    </div>
  </div>
  
  <div class="flex-shrink">
    <p class="font-bold ml-8 mt-4">Intitulé du nouveau parcours</p>
    <div>
      <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4 mb-4" type="text" id="new-parcours" name="new-parcours" required minlength="4" placeholder="Ex : Boulangerie">
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
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown2" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Bloc de compétences<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
        <!-- Dropdown menu -->
        <div id="dropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <select class="py-2 text-sm text-gray-700 dark:text-gray-200 focus:outline-none">
                <option value="dashboard">Dashboard</option>
                <option value="settings">Settings</option>
                <option value="earnings">Earnings</option>
                <option value="sign-out">Sign out</option>
            </select>
        </div>

        </div>

        <div class="flex flex-col w-3/6">
          
        <p class="font-bold ml-8 mt-4">Intitulé du nouveau bloc(s) de compétences</p>
        <div>
        <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-comp" name="new-comp" required minlength="4" placeholder="Ex : CAP Boulangerie"><button><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
        </div>
        </div>
      </div>
    </details>

    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none text-white bg-bleulogo uppercase font-bold">Les compétences</summary>
      <div class="flex">
        <div class="flex flex-col w-3/6">

        <label for="competence" class="font-bold ml-8 mt-4">Choisissez la/les compétence(s)</label>
        <!-- <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown3" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Bloc de compétences<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button> -->
        <!-- Dropdown menu -->
        <!-- <div id="dropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"> -->
            <select id="competence" class="bg-white text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5">
            <option value="competence" default>Choisir une compétence</option>
            <?php foreach($all_competences as $rowcomp) {?>
                <option value="<?php echo $rowcomp['id_competences'];?>"><?php echo $rowcomp['intitule_competences'];?></option><?php }?>
            </select>
        <!-- </div> -->
        </div>

        <div class="flex flex-col w-3/6">
        <p class="font-bold ml-8 mt-4">Intitulé de la nouvelle compétence</p>
        <form action="save_comp.php" method="POST">
          <div>
            <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-comp" name="new-comp" required minlength="4" placeholder="Ex : Travail sur une perceuse">
            <button type="submit"><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
          </div>
        </form>
      </div>
      </div>
    </details>

    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full text-white bg-bleulogo uppercase font-bold">Les objectifs operationnels</summary>
      <div class="flex">
      <div class="flex flex-col w-3/6">

        <label for="obj_op" class="font-bold ml-8 mt-4">Choisissez la/les objectif(s) opérationnel(s)</label>
        <!-- <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown3" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Bloc de compétences<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button> -->
        <!-- Dropdown menu -->
        <!-- <div id="dropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"> -->
            <select id="obj_op" class="bg-white text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5">
            <option value="obj_op" default>Choisir un objectif opérationnel</option>
            <?php foreach($all_objop as $rowobjop) {?>
                <option value="<?php echo $rowobjop['id_objectifs_operationnels'];?>"><?php echo $rowobjop['intitule_objectifs_operationnels'];?></option><?php }?>
            </select>
        <!-- </div> -->
        </div>

        <div class="flex flex-col w-3/6">
        <p class="font-bold ml-8 mt-4">Intitulé du nouvelle objectif opérationnels</p>
        <form action="save_objop.php" method="POST">
          <div>
            <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-objop" name="new-objop" required minlength="4" placeholder="Ex : Travail sur une perceuse">
            <button type="submit"><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
          </div>
        </form>
      </div>
      </div>
    </details>

    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none text-white bg-bleulogo uppercase font-bold">Les objectifs pédagogique</summary>
      <div class="flex">
        <div class="flex flex-col w-3/6">

        <label for="obj_peda" class="font-bold ml-8 mt-4">Choisissez la/les objectif(s) pédagogique(s)</label>
        <!-- <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown3" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Bloc de compétences<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button> -->
        <!-- Dropdown menu -->
        <!-- <div id="dropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"> -->
            <select id="obj_peda" class="bg-white text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5">
            <option value="obj_peda" default>Choisir un objectif pédagogique</option>
            <?php foreach($all_objpeda as $rowobjpeda) {?>
                <option value="<?php echo $rowobjpeda['id_objectifs_pedagogiques'];?>"><?php echo $rowobjpeda['intitule_objectifs_pedagogiques'];?></option><?php }?>
            </select>
        <!-- </div> -->
        </div>

        <div class="flex flex-col w-3/6">
        <p class="font-bold ml-8 mt-4">Intitulé du nouvelle objectif pédagogique</p>
        <form action="save_objpeda.php" method="POST">
          <div>
            <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-objpeda" name="new-objpeda" required minlength="4" placeholder="Ex : Travail sur une perceuse">
            <button type="submit"><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
          </div>
        </form>
      </div>
      </div>
    </details>

    <details>
      <summary class="question py-3 px-4 cursor-pointer select-none w-full text-white bg-bleulogo uppercase font-bold">Les activites</summary>
      <div class="flex">
        <div class="flex flex-col w-3/6">

        <label for="obj_act" class="font-bold ml-8 mt-4">Choisissez la/les activité(s)</label>
        <!-- <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown3" class="text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Bloc de compétences<svg class="w-4 h-4 ml-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button> -->
        <!-- Dropdown menu -->
        <!-- <div id="dropdown3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"> -->
            <select id="obj_act" class="bg-white text-black w-3/6 border-blue-700 border-2 my-4 mx-8 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5">
            <option value="obj_act" default>Choisir une activité(s)</option>
            <?php foreach($all_act as $rowact) {?>
                <option value="<?php echo $rowact['id_activites'];?>"><?php echo $rowact['intitule_activites'];?></option><?php }?>
            </select>
        <!-- </div> -->
        </div>

        <div class="flex flex-col w-3/6">
        <p class="font-bold ml-8 mt-4">Intitulé de la nouvelle activité</p>
        <form action="save_data.php" method="POST">
          <div>
            <input class="border-bleulogo p-1 rounded-lg border-2 w-96 focus:border-bleulogo ml-8 mt-4" type="text" id="new-act" name="new-act" required minlength="4" placeholder="Ex : Travail sur une perceuse">
            <button type="submit"><i class="fa-solid fa-circle-check text-2xl ml-2" style="color: #2ec27e;"></i></button>
          </div>
        </form>
      </div>

      </div>
    </details>

  </div>

</main>

<div class="flex justify-end items-center mr-32 mt-8">
  <button class="inline-block px-4 py-2 text-bleulogo font-semibold border-2 border-bleulogo rounded-md hover:bg-bleulogo hover:text-white">
    Valider le formulaire
  </button>
</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>