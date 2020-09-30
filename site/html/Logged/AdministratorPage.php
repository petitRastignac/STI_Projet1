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
                    <p>Username: admin</p>
                    <p>Validation: </p>
                </div>
            </div>

            <div id="management">
                <div id="management-informations">
                    <div id="add-user">
                        <h2>Ajout d'un utilisateur :</h2>
                        <div class="add-user">
                            <form action="/actions/add-user.php">
                                <label for="usr_name">Nom d'utilisateur:</label><br>
                                <input type="text" id="usr_name" name="usr_name" placeholder="Rentrez un nom d'utilisateur"></input><br>
                                <label for="pass_val">Mot de passe:</label><br>
                                <input type="password" id="pass_val" name="pass_val" placeholder="Rentrez un mot de passe"></input><br>
                                <label for="role_val">Rôle:</label><br>
                                <input type="text" id="role_val" name="role_val" placeholder="Choisissez un rôle"></input><br>
                                <label for="validation_val">Validation:</label>
                                <input type="checkbox" id="validation_val" name="validation_val" checked>
                                <input type="submit" id="submit" value="Creer">                        
                            </form>
                        </div>
                    </div>
                    <div id="change-user">
                        <h2>Modification d'un utilisateur :</h2>
                        <div class="change-user">
                            <form action="/actions/change-user.php">
                                <label for="usr_name">Nom d'utilisateur:</label><br>
                                <input type="text" id="usr_name" name="usr_name" placeholder="Rentrez un nom d'utilisateur"></input><br>
                                <label for="pass_val">Mot de passe:</label><br>
                                <input type="password" id="pass_val" name="pass_val" placeholder="Rentrez un mot de passe"></input><br>
                                <label for="role_val">Rôle:</label><br>
                                <input type="text" id="role_val" name="role_val" placeholder="Choisissez un rôle"></input><br>
                                <label for="validation_val">Validation:</label>
                                <input type="checkbox" id="validation_val" name="validation_val" checked>
                                <input type="submit" id="submit" value="Modifier">                        
                            </form>
                        </div>
                    </div>
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