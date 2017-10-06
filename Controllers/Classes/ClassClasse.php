<?php

class ClassClasse{
    public function getName($get){
        global $bdd;
        $statement = $bdd->query("SELECT * FROM classes WHERE id_c = ".$get);
        while($action = $statement->fetch())
        {
            echo $action['nom_c'];
        }
    }
}