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
                <input type="button" class="browse" value="Profile" >
                <input type="button" class="browse" value="Réception"onClick="window.location = './ReceptionPage.php'">
                <input type="button" class="browse" value="Ecrire message"onClick="window.location = './NewMessage.php'">
            </div>

            <div id="messages">
                <?php  
                $db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
    		// Set errormode to exceptions
   		$db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
    
  		$statement = $db->query("SELECT * FROM Messages WHERE id_dest = {$_SESSION['id']};");
  		$statement->execute();
		$resultat = $statement->fetch();
                if($resultat){
                for($i = 0; $i < count($resultat); $i++){
                echo $resultat[$i];
                }
                }
                else{
                echo "pas de messages";
                }
                
                ?>
            </div>
        </div>
    </body>
</html>
