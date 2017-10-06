<?php
	if(isset($_POST['submit_profil'])){
		$email = $_POST['email'];
		$mdp = sha1($_POST['nom']);
		$mdp = sha1($_POST['prenom']);
        $mdp = sha1($_POST['mdp']);
        $requete = $bdd->query("SELECT * FROM users WHERE email ='".$email."' AND mdp = '".$mdp."'");
        if($reponse = $requete->fetch())
        {
		$id_u = $_SESSION['id'];
		$userInit->updateValues($id_u,'email',$_POST['email'], $bdd, 'users');
		$userInit->updateValues($id_u,'nom',$_POST['nom'], $bdd, 'users');
		$userInit->updateValues($id_u,'prenom',$_POST['prenom'], $bdd, 'users');
		$userInit->updateValues($id_u,'mdp',$_POST['mdp'], $bdd, 'users');
	}