<?php
// Start the session
session_start();
?>
<html>
	<head>
		<title>Connection au salon de reception</title>
		<meta charset="utf-8">
		<meta name="author" lang="fr" content="CANIPEL Vincent">
		<meta name="author" lang="fr" content="SEMBLAT Clement"> 
		<meta name="Description" content="Site de discution avec de grands manques de sécurité"> 
	
		<link rel="stylesheet" href="LoginStyle.css" media="screen" type="text/css" />
	</head>
	
	<body>
		<div id="container">
			<form action ="usrChecking.php" method="POST">
				<h1>Entrez vos identifiants</h1>
				
				<label>Pseudonyme</label>
				<input type="text" placeholder="Veuillez saisir votre pseudonyme" name="usr" required><br>
				<label>Mot de passe</label>
				<input type="password" placeholder="Veuillez saisir votre mot de passe" name="pass" required><br>
				<input type="submit" id="submit" value="Connection">
			</form>
		</div>
	</body>
</html>
