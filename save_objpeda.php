<?php

include_once('connectbdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $newObjPeda = $_POST['new-objpeda'];

  // Effectuer les opérations d'enregistrement dans la base de données
        $add = $connexion->prepare("INSERT INTO objectifs_pedagogiques (intitule_objectifs_pedagogiques) VALUES (?)");
        $add->execute([$_POST['new-objpeda']]);

  // Répondre avec un message de succès ou de confirmation
  echo "Données enregistrées avec succès !";
}
?>
