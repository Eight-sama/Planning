<?php
	session_start();
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=planning;charset=utf8","root","");
    }
    catch(Exception $e)
    {
        die("Erreur de connexion");
    }
?>