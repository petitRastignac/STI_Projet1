<?php
session_start();
// Send a message
$message="";
if 	($_SERVER['REQUEST_METHOD'] === 'POST'){
    try{
        // Create PDO object
        $db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
        // Set errormode to exceptions
        $db->setAttribute(PDO::ATTR_ERRMODE, 
                                PDO::ERRMODE_EXCEPTION);
        
		$statement = $db->query("SELECT * FROM Member WHERE user LIKE '{$_POST['dest']}';");
		$statement->execute();

		$resultat = $statement->fetch();
        
        $message=$resultat;

        if ($resultat != null){
            $statementE = $db->query("INSERT INTO
            Messages(exp, dest, subject, content) 
            VALUES('{$_SESSION['user']}', '{$_POST['dest']}', '{$_POST['subject']}', '{$_POST['msg']}');");

            if (!$statementE){
                $message = 'Echec de l envoie';
            } else {
                $message = 'Reussite de l envoie';
            }
        } else {
            $message = "Destinataire introuvable";
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>

<html>
    <head>
		<title>Nouveau message</title>
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

            <div id="writing">
                <form method="POST">
                    <label for="dest">Destinataire</label>
                    <input type="text" id="dest-value" name="dest" placeholder="Saisir le nom d'utilisateur du destinataire"><br>
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject-value" name="subject" placeholder="Saisir le sujet"><br>
                    <label id="msg_value" for="msg">Message</label><br>
                    <textarea rows="34" cols="81" name="msg"></textarea><br>
                    <input class="submit_msg" type="submit" value="Envoyer">

                    <p><?php echo $message; ?></p>
                </form>
            </div>
        </div>
    </body>
</html>
