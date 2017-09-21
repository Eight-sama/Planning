<?php

class ClassUser{    
    public function userConnect($bdd){
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
                header("Location:index.php");
                die();
            }
            else
            {
                die(vardump("Mauvais identifiant"));
            }
        }
    }
    public function printinf($info){
        // Exemple : Afficher l'id de l'utilisateur: userDispInfo('id')
        if(!empty($_SESSION) && isset($_SESSION)){
            echo $_SESSION[$info];
        }
    }
}