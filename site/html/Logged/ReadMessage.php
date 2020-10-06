<?php session_start();
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
                <input type="button" class="browse" value="Déconnection">
                <input type="button" class="browse" value="Profile">
                <input type="button" class="browse" value="Réception" >
                <input type="button" class="browse" value="Ecrire message">
            </div>

            <div id="writing">
                <label for="dest-value">Destinataire</label>
                <input type="text" id="dest-value" name="test-value" value="USER NAME" disabled><br>
                <label for="subject-value">Sujet</label>
                <input type="text" id="subject-value" name="subject-value" value="SUBJECT" disabled><br>
                <label id="msg_value" for="msg-value">Message</label><br>
                <textarea rows="34" cols="81" name="msg-value" disabled>

Bonjour,

Je test un message.

Fin du message.
                </textarea>
            </div>
        </div>
    </body>
</html>
