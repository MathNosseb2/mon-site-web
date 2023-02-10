<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
	$status = "<p style='color:#FFFFFF; font-size:20px'>
	<span style='background-color:#46ab4a;'>Votre code captcha est correct.</span></p>";
	echo $status;
	// connexion à la base de données
	$db_username = 'root';
	$db_password = '';
	$db_name = 'form';
	$db_host = 'localhost';
	$db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
		or die('could not connect to database');

	// on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
	// pour éliminer toute attaque de type injection SQL et XSS
	$username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username']));
	$password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));



	if ($username !== "" && $password !== "") {
		$requete = "SELECT mot_de_passe FROM utilisateur where 
		nom_utilisateur = '" . $username . "'";
		$exec_requete = mysqli_query($db, $requete);
		$reponse = mysqli_fetch_array($exec_requete);
		$hash = $reponse['mot_de_passe'];

		if (password_verify($password, $hash)) {
			$_SESSION['username'] = $username;
			header('Location: principale.php');
		} else {
			header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
		}
	}
}
