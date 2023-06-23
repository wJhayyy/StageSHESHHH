<?php

include_once('connectbdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $newComp = $_POST['new-comp'];

  // Effectuer les opérations d'enregistrement dans la base de données
        $add = $connexion->prepare("INSERT INTO competences (intitule_competences) VALUES (?)");
        $add->execute([$_POST['new-comp']]);

  // Répondre avec un message de succès ou de confirmation
  echo "Données enregistrées avec succès !";
}
?>
