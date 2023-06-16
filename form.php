<?php

include_once('connectbdd.php');


// $connect = new Connect();

$stmt_competence = $connexion->prepare("SELECT id_competences, intitule_competences FROM competences");
$stmt_competence->execute();
$all_competences = $stmt_competence->fetchAll(PDO::FETCH_ASSOC);

//die(var_dump($all_competences));

?>

<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="form.css">
  <script src="https://cdn.tailwindcss.com"></script>
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

<div class="m-auto lg:ml-16">
  <h2 class="font-bold uppercase mb-6">Choisissez la/les compétences dans la liste ci-dessous</h2>
  <form class="w-96 mb-8">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative ">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-bleulogo hover:bg-cyan-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
  </form>

    <h2 class="font-bold uppercase mb-6">Liste des objectifs opérationnels correspondants :</h2>

  <div class="w-5/6">
      <?php 
      foreach ($all_competences as $rowcompetences) { 

        // var_dump($rowcompetences);
        $id_comp = $rowcompetences['id_competences'];

        $stmt_objop = $connexion->prepare("SELECT oo.intitule_objectifs_operationnels, oo.id_objectifs_operationnels FROM objectifs_operationnels oo INNER JOIN classer cl ON cl.id_objectifs_operationnels = oo.id_objectifs_operationnels WHERE cl.id_competences = ?");
        $stmt_objop->execute([$id_comp]);
        $all_objop = $stmt_objop->fetchAll(PDO::FETCH_ASSOC);
        
        // var_dump($all_objop);
        ?>


        <h2 class="uppercase font-bold mb-4 flex justify-between"><?php echo $rowcompetences['intitule_competences'] . ' :';?> <button class="text-rougelogo border-2 border-rougelogo w-7 rounded-lg hover:text-white hover:bg-rougelogo">X</button></h2>
  
        <?php foreach($all_objop as $rowobjop) { ?>

          <p class="ml-16 mb-2 flex justify-between">

              <?php echo '- ' . $rowobjop['intitule_objectifs_operationnels']; ?>
          
            <button data-tooltip-target="tooltip-top<?= $rowobjop['id_objectifs_operationnels'] ?>" data-tooltip-placement="top" type="button" class="flex justify-end mb-2 md:mb-0 text-bleulogo border-2 border-bleulogo px-2 hover:text-white hover:bg-bleulogo focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center">i</button>
            <div id="tooltip-top<?= $rowobjop['id_objectifs_operationnels'] ?>" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
            
            <?php
            $id_objop = $rowobjop['id_objectifs_operationnels'];

            $stmt_objpd = $connexion->prepare("SELECT op.intitule_objectifs_pedagogiques FROM objectifs_pedagogiques op LEFT JOIN identifier ide ON ide.id_objectifs_pedagogiques = op.id_objectifs_pedagogiques WHERE ide.id_objectifs_operationnels = ?");
            $stmt_objpd->execute([$id_objop]);
            $all_objpd = $stmt_objpd->fetchAll(PDO::FETCH_ASSOC);
            
            ?>
            
            <?php foreach ($all_objpd as $rowobjpd) {?>

            <?php echo $rowobjpd['intitule_objectifs_pedagogiques'];?> <br>
            <?php } ?>
            <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </p>
        <?php } ?>

          <hr class="mt-4 mb-4">
    <?php } ?>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>


</html>