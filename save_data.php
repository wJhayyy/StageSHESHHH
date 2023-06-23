<?php

include_once('connectbdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $newAct = $_POST['new-act'];

  // Effectuer les opérations d'enregistrement dans la base de données
        $add = $connexion->prepare("INSERT INTO activites (intitule_activites) VALUES (?)");
        $add->execute([$_POST['new-act']]);

  // Répondre avec un message de succès ou de confirmation
  echo "Données enregistrées avec succès !";
}
?>
