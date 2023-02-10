<html>

<head>
	<meta charset="utf-8">
	<!-- importer le fichier de style -->
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>

<body>
	<div id="container">
		<!-- zone de connexion -->

		<form action="verificationinscri.php" method="POST">
			<h1>Inscription</h1>

			<label><b>email</b></label>
			<input type="text" placeholder="Entrer l'email" name="nom_utilisateur" required>

			<label><b>Mot de passe</b></label>
			<input type="password" id="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required><br>
			<label for="checkbox">
				<input type="checkbox" id="checkbox">
				<p class="see">afficher le mdp</p>
			</label>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					var checkbox = $("#checkbox");
					var password = $("#password");
					checkbox.click(function() {
						if (checkbox.prop("checked")) {
							password.attr("type", "text");
						} else {
							password.attr("type", "password");
						}
					});
				});
			</script>
			<input type="checkbox" name="check" id="check" required>

			<p>j'ai lu et accepté le <a href="https://policies.google.com/terms?hl=fr" target="_blank" rel="noopener noreferrer">règlement</a></p>

			<input type="submit" id='submit' value='OK'>

		</form>
	</div>
</body>

</html>