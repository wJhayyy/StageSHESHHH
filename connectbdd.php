<?php
$serveur = 'localhost'; // Nom ou adresse IP du serveur de la base de données
$nomUtilisateur = 'jerem'; // Nom d'utilisateur de la base de données
$motDePasse = 'jerem'; // Mot de passe de la base de données
$nomBaseDeDonnees = 'configurateur_competences'; // Nom de la base de données

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $nomUtilisateur, $motDePasse);
    // Configuration des options PDO
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
