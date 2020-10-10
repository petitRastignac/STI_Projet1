<?php
session_start();
// Here we grab the user and his password and we verify
// if they are the same
try{
    //checking for special characters in username
    $validite = true;
    for($i=0; $i<strlen($_POST['usr']); $i++){
    if($_POST['usr'][$i] === "'" || $_POST['usr'][$i] === "-" || $_POST['usr'][$i] === '"'){
    $validite = false;
    }
    }
    if($validite === false){ //checking if special characters were found in username
    echo "username not valid - contains special characters";
    header("Location: ./login.php"); //going back if username invalid
    die();
    }

    // Create PDO object
    $db = new PDO('sqlite:/usr/share/nginx/databases/database.sqlite');
    // Set errormode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
    
    $statement = $db->query("SELECT * FROM Member WHERE user LIKE '{$_POST['usr']}';");
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
        $_SESSION["role"] = $resultat["role"];
        $_SESSION["id"] = $resultat["id"];
        $_SESSION["user"] = $resultat["user"];
        echo 'Connection !';
        echo $_SESSION["role"];
        if($_SESSION["role"] == "colab"){
        header("Location: ./Logged/ColaboratorPage.php");
        die();
        }
        if($_SESSION["role"] == "admin"){
        header("Location: ./Logged/AdministratorPage.php"); //après mise à jour de ColaboratorPage ce bloc est devenu redondant
        die();
        }
        
    } else {
        echo 'Mauvais identifiants ou compte non active';
    }
}
?>
