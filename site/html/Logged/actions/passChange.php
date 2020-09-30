<?php
// Here we change the password of an user in the db
try{
    // Create PDO object
    $db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
    // Set errormode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
    
    $pass = md5($_POST['password']);    
    $statement = $db->query("UPDATE Member SET pass_md5 = {$pass} WHERE id = {$_SESSION['id']}");
    
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