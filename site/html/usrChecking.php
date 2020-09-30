<?php
// Here we grab the user and his password and we verify
// if they are the same
try{
    // Create PDO object
    $db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
    // Set errormode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
    
    $statement = $db->query("SELECT * FROM Member WHERE user LIKE 'popole' ;");
    
    $statement->execute();

    $resultat = $statement->fetch();

}catch(PDOException $e){
    echo $e->getMessage();
}

// Now we check the password
if (!$resultat){
    echo 'Erreur de connection';
} else {
    if (md5($_POST['password']) == $resultat['pass_md5'] && $resultat['valid'] == 1){
        session_start();
        $_SESSION['role'] = $resultat['role'];
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['user'] = $resultat['user'];
        echo 'Connection !';
        
    } else {
        echo 'Mauvais identifiants ou compte non active';
    }
}
?>