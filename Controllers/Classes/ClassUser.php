<?php

class ClassUser{
    public function printinf($info){
        // Exemple : Afficher l'id de l'utilisateur: userDispInfo('id')
        if(!empty($_SESSION) && isset($_SESSION)){
            echo $_SESSION[$info];
        }
    }
    public function getName($get){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$get);
        while($action = $statement->fetch())
        {
            echo $action['prenom'];
        }
    }
    public function getSurname($get){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$get);
        while($action = $statement->fetch())
        {
            echo $action['nom'];
        }
    }
    public function getEmail($get){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$get);
        while($action = $statement->fetch())
        {
            echo $action['email'];
        }
    }
    public function getInf($info){
        if(!empty($_SESSION) && isset($_SESSION)){
            return $_SESSION[$info];
        }
    }
    public function getAppreGlobale($id_u){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM users WHERE id_u = ".$get);
        while($action = $statement->fetch())
        {
            echo $action['email'];
        }
    }
    public function updateValues($id_u, $champ, $new_value, $bdd, $table){
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $bdd->prepare("UPDATE ? SET ? = ? WHERE id_u = ?");
        $statement->execute([$table,$champ,$new_value,$id_u]);
    }
}