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

<div class="container mx-auto">
   <div class="m-8 rounded overflow-hidden">
     <!-- accordion-tab  -->
     <div class="group outline-none accordion-section" tabindex="1">
       <div class="group bg-bleulogo flex justify-between px-4 py-6 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
         <div class="text-white text-stone-200 transition ease duration-500 uppercase">
           Les Formations
         </div>
         <div class="h-8 w-8 border border-white rounded-full items-center inline-flex justify-center transform transition ease duration-500 text-white group-focus:-rotate-180 absolute top-0 right-0 mb-auto ml-auto my-5 mr-2">
           <i class="fas fa-chevron-down"></i>
         </div>
       </div>
       <div class="group-focus:max-h-screen max-h-0 bg-c px-4 overflow-hidden ease duration-500">
         <p class="p-2 text-gray-400 text-justify">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
           repellat amet doloribus consequuntur eos similique provident
           tempora voluptates iure quia fuga dicta voluptatibus culpa
           mollitia recusandae delectus id suscipit labore?
         </p>
       </div>
     </div>
     <!-- accordion-tab -->
     <!-- accordion-tab  -->
     <div class="group outline-none accordion-section" tabindex="2">
       <div class="group bg-bleulogo flex justify-between px-4 py-6 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
         <div class="text-white text-stone-200 transition ease duration-500 uppercase">
           Le Parcours
         </div>
         <div class="h-8 w-8 border border-white rounded-full items-center inline-flex justify-center transform transition ease duration-500 text-white group-focus:-rotate-180 absolute top-0 right-0 mb-auto ml-auto my-5 mr-2">
           <i class="fas fa-chevron-down"></i>
         </div>
       </div>
       <div class="group-focus:max-h-screen max-h-0 bg-white px-4 overflow-hidden ease duration-500">
         <p class="p-2 text-gray-400 text-justify">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
           repellat amet doloribus consequuntur eos similique provident
           tempora voluptates iure quia fuga dicta voluptatibus culpa
           mollitia recusandae delectus id suscipit labore?
         </p>
       </div>
     </div>
     <!-- accordion-tab -->
     <!-- accordion-tab  -->
     <div class="group outline-none accordion-section" tabindex="3">
       <div class="group bg-bleulogo flex justify-between px-4 py-6 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
         <div class="text-white text-stone-200 transition ease duration-500 uppercase">
           Les blocs de competences
         </div>
         <div class="h-8 w-8 border border-white rounded-full items-center inline-flex justify-center transform transition ease duration-500 text-white group-focus:-rotate-180 absolute top-0 right-0 mb-auto ml-auto my-5 mr-2">
           <i class="fas fa-chevron-down"></i>
         </div>
       </div>
       <div class="group-focus:max-h-screen max-h-0 bg-white px-4 overflow-hidden ease duration-500">
         <p class="p-2 text-gray-400 text-justify">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
           repellat amet doloribus consequuntur eos similique provident
           tempora voluptates iure quia fuga dicta voluptatibus culpa
           mollitia recusandae delectus id suscipit labore?
         </p>
       </div>
     </div>
     <div class="group outline-none accordion-section" tabindex="4">
       <div class="group bg-bleulogo flex justify-between px-4 py-6 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
         <div class="text-white text-stone-200 transition ease duration-500 uppercase">
           Les competences
         </div>
         <div class="h-8 w-8 border border-white rounded-full items-center inline-flex justify-center transform transition ease duration-500 text-white group-focus:-rotate-180 absolute top-0 right-0 mb-auto ml-auto my-5 mr-2">
           <i class="fas fa-chevron-down"></i>
         </div>
       </div>
       <div class="group-focus:max-h-screen max-h-0 bg-white px-4 overflow-hidden ease duration-500">
         <p class="p-2 text-gray-400 text-justify">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
           repellat amet doloribus consequuntur eos similique provident
           tempora voluptates iure quia fuga dicta voluptatibus culpa
           mollitia recusandae delectus id suscipit labore?
         </p>
       </div>
     </div>
     <div class="group outline-none accordion-section" tabindex="5">
       <div class="group bg-bleulogo flex justify-between px-4 py-6 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
         <div class="text-white text-stone-200 transition ease duration-500 uppercase">
           Les objectifs operationnels
         </div>
         <div class="h-8 w-8 border border-white rounded-full items-center inline-flex justify-center transform transition ease duration-500 text-white group-focus:-rotate-180 absolute top-0 right-0 mb-auto ml-auto my-5 mr-2">
           <i class="fas fa-chevron-down"></i>
         </div>
       </div>
       <div class="group-focus:max-h-screen max-h-0 bg-white px-4 overflow-hidden ease duration-500">
         <p class="p-2 text-gray-400 text-justify">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
           repellat amet doloribus consequuntur eos similique provident
           tempora voluptates iure quia fuga dicta voluptatibus culpa
           mollitia recusandae delectus id suscipit labore?
         </p>
       </div>
     </div>
     <div class="group outline-none accordion-section" tabindex="6">
       <div class="group bg-bleulogo flex justify-between px-4 py-6 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
         <div class="text-white text-stone-200 transition ease duration-500 uppercase">
           Les objectifs pedagogiques
         </div>
         <div class="h-8 w-8 border border-white rounded-full items-center inline-flex justify-center transform transition ease duration-500 text-white group-focus:-rotate-180 absolute top-0 right-0 mb-auto ml-auto my-5 mr-2">
           <i class="fas fa-chevron-down"></i>
         </div>
       </div>
       <div class="group-focus:max-h-screen max-h-0 bg-white px-4 overflow-hidden ease duration-500">
         <p class="p-2 text-gray-400 text-justify">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
           repellat amet doloribus consequuntur eos similique provident
           tempora voluptates iure quia fuga dicta voluptatibus culpa
           mollitia recusandae delectus id suscipit labore?
         </p>
       </div>
     </div>
     <div class="group outline-none accordion-section" tabindex="7">
       <div class="group bg-bleulogo flex justify-between px-4 py-6 items-center text-gray-500 transition ease duration-500 cursor-pointer pr-10 relative">
         <div class="text-white text-stone-200 transition ease duration-500 uppercase">
           Les activites
         </div>
         <div class="h-8 w-8 border border-white rounded-full items-center inline-flex justify-center transform transition ease duration-500 text-white group-focus:-rotate-180 absolute top-0 right-0 mb-auto ml-auto my-5 mr-2">
           <i class="fas fa-chevron-down"></i>
         </div>
       </div>
       <div class="group-focus:max-h-screen max-h-0 bg-white px-4 overflow-hidden ease duration-500">
         <p class="p-2 text-gray-400 text-justify">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
           repellat amet doloribus consequuntur eos similique provident
           tempora voluptates iure quia fuga dicta voluptatibus culpa
           mollitia recusandae delectus id suscipit labore?
         </p>
       </div>
     </div>
     <!-- accordion-taffb -->
   </div>
 </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>