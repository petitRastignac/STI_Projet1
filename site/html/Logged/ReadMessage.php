<?php session_start();

$db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$exp="";
$subject="";
$content="";

$statement = $db->query("SELECT exp, subject, content FROM Messages WHERE id = '{$_GET['i']}';");
$statement->execute();
$resultat = $statement->fetch();
if($resultat){
    $exp = $resultat['exp'];
    $subject = $resultat['subject'];
    $content = $resultat['content'];
}
else{
    header("Location: /Logged/ReceptionPage.php");
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
                <label for="dest-value">Destinataire</label>
                <input type="text" id="dest-value" name="test-value" value=<?php echo "{$exp}";?> disabled><br>
                <label for="subject-value">Sujet</label>
                <input type="text" id="subject-value" name="subject-value" value=<?php echo "{$subject}";?> disabled><br>
                <label id="msg_value" for="msg-value">Message</label><br>
                <textarea rows="34" cols="81" name="msg-value" disabled><?php echo "{$content}";?></textarea>
            </div>
        </div>
    </body>
</html>;
