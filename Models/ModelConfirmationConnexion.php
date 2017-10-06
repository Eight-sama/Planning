<?php

	if(isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $mdp = sha1($_POST['mdp']);
        $requete = $bdd->query("SELECT * FROM users WHERE email ='".$email."' AND mdp = '".$mdp."'");
        if($reponse = $requete->fetch())
        {
            $_SESSION['connecte']=true;
            $_SESSION['id']= $reponse['id_u'];
            $_SESSION['nom']= $reponse['nom'];
            $_SESSION['prenom']= $reponse['prenom'];
            $_SESSION['email']= $reponse['email'];
            $_SESSION['lvl']= $reponse['lvl'];
            echo "<meta http-equiv='refresh' content='2; URL=index.php?page=Accueil' />";
            die("Connexion en cours...");
        }
        else
        {
        	echo "<meta http-equiv='refresh' content='3; URL=index.php?page=Accueil' />";
            die("Mauvais identifiant, retour à la page d'accueil dans 3 secondes.");
        }
    }