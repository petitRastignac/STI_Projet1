<?php
session_start();
// Here we change the password of an user in the db
try{
    // Create PDO object
    $db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
    // Set errormode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
    
    $statementE = $db->query("INSERT INTO
            Messages(exp, dest, subject, content) 
            VALUES('{$_SESSION['user']}', '{$_POST['dest']}', '{$_POST['subject']}', '{$_POST['msg']}');");

            if (!$statementE){
                $message = 'Echec de l envoie';
            } else {
                $message = 'Reussite de l envoie';
            }

}catch(PDOException $e){
    echo $e->getMessage();
}

// Now we check the password
if (!$resultat){
    echo 'Erreur de changement de mot de passe';
} else {
    echo 'Changement de mot de passe effectué';
    header("Location: ../ColaboratorPage.php");
    die();
}
?>
