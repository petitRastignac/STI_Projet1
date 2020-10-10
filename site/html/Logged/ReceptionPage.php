<?php session_start();
?>

<html>
    <head>
		<title>Réception des messages</title>
		<meta charset="utf-8">
		<meta name="author" lang="fr" content="CANIPEL Vincent">
		<meta name="author" lang="fr" content="SEMBLAT Clement"> 
		<meta name="Description" content="Site de discution avec de grands manques de sécurité"> 
	
		<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
	</head>
	
    <body>
        <div id="container">
        <div id="browsing">
                <input type="button" class="browse" value="Déconnection" onClick="window.location = '../login.php'">
                <input type="button" class="browse" value="Profile" onClick="window.location = './ColaboratorPage.php'">
                <input type="button" class="browse" value="Réception"onClick="window.location = './ReceptionPage.php'">
                <input type="button" class="browse" value="Ecrire message"onClick="window.location = './NewMessage.php'">
            </div>

            <div id="messages">
                <?php  
                $db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
    		// Set errormode to exceptions
   		$db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
    
  		$statement = $db->query("SELECT id, exp, subject FROM Messages WHERE dest LIKE '{$_SESSION['user']}';");
  		$statement->execute();
		$resultat = $statement->fetchAll();
                if($resultat){
                    for($i = 0; $i < count($resultat); $i++){
                        echo "<div class='message'><span class='exp'>{$resultat[$i][1]}</span> <a href='ReadMessage.php?i={$resultat[$i][0]}' class='subject'>{$resultat[$i][2]}</a></div>";
                    }
                }
                else{
                    echo "<p>pas de messages</p>";
                }
                
                ?>
            </div>
        </div>
    </body>
</html>
