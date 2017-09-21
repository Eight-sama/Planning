<?php
namespace Classes\ClassAutoloader;

class ClassAutoloader{
    
    public static function autoloader($class_name){
        require 'class/' . $class_name . '.php';
    }
    
}