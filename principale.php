<html>

<head>
	<meta charset="utf-8">
	<!-- importer le fichier de style -->
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>

<body style='background:#fff;'>
	<header>
		<a href="login.php">connexion</a>
	</header>
	<div id="haut">
		<div id="haut_body">
			MON SITE
		</div>
	</div>
	<div id="content">
		<!-- tester si l'utilisateur est connecté -->
		<?php
		session_start();
		if ($_SESSION['username'] !== "") {
			$user = $_SESSION['username'];
			// afficher un message
			echo "Bonjour $user";
		}
		?>
		<form action="delete.php">
			<input type="submit" value="suprimer le compte">
		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>



</body>

</html>