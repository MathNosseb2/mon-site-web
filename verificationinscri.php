<?php
// Connexion à la base de données
$db_username = 'root';
$db_password = '';
$db_name = 'form';
$db_host = 'localhost';
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name)
	or die('could not connect to database');

// Vérification de la connexion
if ($conn->connect_error) {
	die("Connexion échouée : " . $conn->connect_error);
}

// Récupération des données du formulaire d'inscription
$nom_utilisateur = $_POST["nom_utilisateur"];
$mot_de_passe = $_POST["mot_de_passe"];

// Valider l'email
if (filter_var($nom_utilisateur, FILTER_VALIDATE_EMAIL)) {
	echo "L'adresse e-mail est valide";
	// Hashage du mot de passe pour plus de sécurité
	$mot_de_passe = password_hash($mot_de_passe, PASSWORD_DEFAULT);

	// Préparation et exécution de la requête SQL pour insérer les données de l'utilisateur
	$sql = "INSERT INTO utilisateur (nom_utilisateur, mot_de_passe)
	VALUES ('$nom_utilisateur', '$mot_de_passe')";

	if ($conn->query($sql) === TRUE) {
		echo '<br>';
		echo "Inscription réussie !";
		echo '<br>';
		echo '<p><a href="principale.php">Continuer</a></p>';
	} else {
		echo "Erreur : " . $sql . "<br>" . $conn->error;
	}
} else {
	echo "L'adresse e-mail n'est pas valide";
	echo '<p><a href="registration.php">Retour</a></p>';
}

// Fermeture de la connexion
$conn->close();
