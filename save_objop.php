<?php

include_once('connectbdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $newObjOp = $_POST['new-objop'];

  // Effectuer les opérations d'enregistrement dans la base de données
        $add = $connexion->prepare("INSERT INTO objectifs_operationnels (intitule_objectifs_operationnels) VALUES (?)");
        $add->execute([$_POST['new-objop']]);

  // Répondre avec un message de succès ou de confirmation
  echo "Données enregistrées avec succès !";
}
?>
