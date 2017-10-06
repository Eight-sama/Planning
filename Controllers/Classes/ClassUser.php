<?php

class ClassUser{
    public function printinf($info){
        // Exemple : Afficher l'id de l'utilisateur: userDispInfo('id')
        if(!empty($_SESSION) && isset($_SESSION)){
            $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$_SESSION['id']);
            while($action = $statement->fetch())
            {
                echo $action[$info];
            }
        }
    }
    public function getName($get){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$get);
        while($action = $statement->fetch())
        {
            return $action['prenom'];
        }
    }
    public function getSurname($get){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$get);
        while($action = $statement->fetch())
        {
            return $action['nom'];
        }
    }
    public function getEmail($get){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$get);
        while($action = $statement->fetch())
        {
            return $action['email'];
        }
    }
    public function getInf($info){
        global $bdd;
        if(!empty($_SESSION) && isset($_SESSION)){
            $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$_SESSION['id']);
            while($action = $statement->fetch())
            {
                return $action[$info];
            }
        }
    }
     public function getInfOther($info, $get){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$get);
        while($action = $statement->fetch())
        {
            return $action[$info];
        }
    }
    public function getAppreGlobale($id_u){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM apprecier WHERE id_u = ".$id_u);
        while($action = $statement->fetch())
        {
            return $action['appreciationglobal'];
        }
    }
    public function updateAppreGlobale($id_u,$content){
        global $bdd;
        $statement = $bdd->prepare("UPDATE appprecier SET appreciationglobal = ? WHERE id_u = ".$id_u);
        $statement->execute([$content]);
    }
}