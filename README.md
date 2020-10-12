# Messagerie - Rapidos

Rapidos est une messagerie d'entreprise faites en très peu de temps et visant à discuter entre collègues pour avancer plus rapidement sur nos projets !
Ce n'est pas encore véritablement au point surtout niveau sécurité alors je vous fais confiance les collègues pour ne pas essayer de pirater le système ;)

Connectez-vous sur : localhost:8080/login.php

# Les fonctionnalités de collaborateur

La site de messagerie permet de discuter entre collègues.
* Vous pouvez lire vos messages dans la page de réception
    * Y répondre ou supprimer vos messages reçus
    * Consulter le contenue du message en clickant sur le sujet
    * Connaitre l'expéditeur, le sujet, le contenue et la date de réception du mail
* Vous pouvez écrire un message dans la partie Ecrire message
    * Vous devrez renseigner un destinataire, un sujet et optionnelement un contenu
    * **ATTENTION** les caractères spéciaux sont très peu recommandés !!
* Vous pouvez accéder à votre profil
    * Vous pourrez y trouver votre nom d'utilisateur
    * De quoi changer votre mot de passe en rentrant l'ancien

# Les fonctionnalités d'administrateur

Les administrateurs en plus des fonctionnalitées données aux collaborateurs peuvent:
* Ajouter un utilisateur
* Modifier un utilisateur (sauf son nom d'utilisateur)
* Supprimer un utilisateur

# Mise en place du service (pour les administrateurs)

Alors il faut pour mettre en place le service sur le serveur de l'entreprise :
* Cloner le répo de git hub sur le serveur
* Lancer l'application avec  ```$ sudo bash server.sh```
* En cas de problème de base de données, il est impératif de donner les permissions au dossier et à la base de données dans /site/databases . Le script ```server.sh``` prend en charge cette étape sur linux.
