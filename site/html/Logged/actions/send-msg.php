<?php
session_start();
// Send a message
try{
    // Create PDO object
    $db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
    // Set errormode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
    
    $statement = $db->query("INSERT OR IGNORE INTO
     Messages(id_exp, id_dest, subject, content) 
     VALUES(1, 2, 'Bienvenue', 'Vous êtes le bien venue dans notre messagerie\nDe la part de l administration !'););
    
    $statement->execute();

    $resultat = $statement->fetch();

}catch(PDOException $e){
    echo $e->getMessage();
}

// Now we check the password
if (!$resultat){
    echo 'Erreur de changement de mot de passe';
} else {
    echo 'Changement de mot de passe effectué';
}
?>
