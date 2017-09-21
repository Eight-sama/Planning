<?php

class ClassUser{
    
    public function formConnect($formname, $sessions_variables = []){
        
        $constructor = '';  
        
        if(isset($_POST['submit'])) 
        {
            $login = $_POST['login'];
            $mdp = sha1($_POST['mdp']);
            $requete = $bdd->query("SELECT * FROM users WHERE login ='".$login."' AND mdp = '".$mdp."'");        

            if($reponse = $requete->fetch())
            {
                $_SESSION['connecte']=true;
                foreach ($sessions_variables as $k => $v){
                    $_SESSION['$k'] = $reponse['$v'];
                }
                header("Location:../index.php");
                die();
            }
            else
            {
                vardump("Mauvais identifiant");
            }
        }
    }
}