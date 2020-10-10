<?php
session_start();
if(isset($_SESSION['id'])){ //logs out users that were already logged in
    $_SESSION["role"] = NULL;
    $_SESSION["id"] = NULL;
    $_SESSION["user"] = NULL;
}
header("Location: ./login.php");
die();
?>
