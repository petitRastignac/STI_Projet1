<?php session_start();
?>
<html>
    <head>
		<title>Profile</title>
		<meta charset="utf-8">
		<meta name="author" lang="fr" content="CANIPEL Vincent">
		<meta name="author" lang="fr" content="SEMBLAT Clement"> 
		<meta name="Description" content="Site de discution avec de grands manques de sécurité"> 
	
		<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
	</head>
	
    <body>
        <div id="container">
            <div id="browsing">
                <input type="button" class="browse" value="Déconnection">
                <input type="button" class="browse" value="Profile">
                <input type="button" class="browse" value="Réception">
                <input type="button" class="browse" value="Ecrire message">
            </div>

            <div id="profile">
                <div id="profile-informations">
                    <p>Username: </p>
                    <p>Validation: </p>
                </div>
            </div>

            <div id="change_pass">
                <div id="change_pass_info">
                    <form action="/actions/changePass.php">
                        <label for='passChange'>Changer de mot de passe :</label>
                        <input type="password" id="passChange" name="passChange" placeholder="Rentrez votre nouveau mot de passe"><br>
                        <input id="passChange" type="submit" value="Valider">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
