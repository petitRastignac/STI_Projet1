<?php
// Here we change the password of an user in the db
try{
    // Create PDO object
    $db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
    // Set errormode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
    
    $pass = md5($_POST['pass_val']);    
    $statement = $db->query("INSERT OR IGNORE INTO Member(user, pass_md5, role, valid) VALUES($_POST[usr_val], {$pass}, {$_POST[role_val]}, {$_POST[validation_val]});");
    
    $statement->execute();

    $resultat = $statement->fetch();

}catch(PDOException $e){
    echo $e->getMessage();
}

// Now we check the password
if (!$resultat){
    echo 'Erreur d ajout';
} else {
    echo 'Ajout de l utilisateur';
}
?>