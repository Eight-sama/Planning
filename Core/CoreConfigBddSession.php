<?php
session_start();
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=planning","root","");
    }
    catch(Exception $e)
    {
        die("Erreur de connexion");
    }