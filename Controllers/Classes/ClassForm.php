<?php

class ClassForm{
    
    public function input($type, $name, $content){
        
        $html = "<div class='row'>";
        $html .= "<div class='input-field col s12'>";
        $html .= "<label for='".$name."'>".$content."</label>";
        $html .= "<input id='".$name."' name='".$name."' type='".$type."'>";
        $html .= "</div>";
        $html .= "</div>";        

        return $html;
    }

    public function inputwdefault($type, $name, $content,$default){
        
        $html = "<div class='row'>";
        $html .= "<div class='input-field col s12'>";
        $html .= "<label for='".$name."'>".$content."</label>";
        $html .= "<input value='".$default."' id='".$name."' name='".$name."' type='".$type."'>";
        $html .= "</div>";
        $html .= "</div>";        

        return $html;
    }

    public function submit($class,$content,$name){
        
        $html = "<div class='row'>";
        $html .= "<div class='input-field col s12 center'>";
        $html .= "<button class='".$class."' type='".$name."' name='".$name."' id='".$name."'>";
        $html .= $content;
        $html .= "</button>";
        $html .= "</div>";
        $html .= "</div>";

        return $html;
    }

    public function select($name, $values){

        $html="<select class='' name='".$name."' id='".$name."'> ";
        $i=1;
        foreach ($values as $value){
            $html .= "<option value='".$i."'>".$value."</option>";
            $i++;
        }

        $html .= "</select>";

        return $html;
    }

    public function textarea($name,$value){
        $html= "<textarea name='".$name."' id='".$name."'> ";
        $html .= $value;
        $html .= "</textarea>";

        return $html;
    }

    public function checkbox($name, $value){

        $html = "<p>";
        $html .= " <input type='".$name."' id='".$name."' />";
        $html .= " <label for='".$name."'>".$value."</label>";
        $html .= "</p>";

        return $html;
    }

    public function radio($label, $name, $values, $options = []){

        $constructor = ''; 

        foreach ($options as $k => $v){
            $constructor .= " $k = '$v' ";
        }    

        $html = "<div class='radio'> $label";

        foreach($values as $value){

            $html .= "<label>";
            $html .= "<input type='radio' $constructor name='".$name."' id='$name' value='".$value."'>";
            $html .= $value;
            $html .= "</label>";

        }

        $html .= "</div>";

        return $html;    
    }

    public function dbConnect(){
        
        try{
            return $bdd = new PDO('mysql:host=localhost;dbname=planning', 'root' , '');
        }
        catch(Exception $e){
            die("Erreur de connexion à la BDD ".$e->getMessage());
        }        
    }
}

?>