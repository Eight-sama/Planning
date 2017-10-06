<?php
	if(isset($_POST['submit_profil']) && isset($_GET['id_u'])){
		$email = $_POST['email'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
        $requete = $bdd->prepare("UPDATE users SET email = '".$email."' WHERE id_u = ".$_GET['id_u']);
        $requete->execute();
        $requete = $bdd->prepare("UPDATE users SET nom = '".$nom."' WHERE id_u = ".$_GET['id_u']);
        $requete->execute();
        $requete = $bdd->prepare("UPDATE users SET prenom = '".$prenom."' WHERE id_u = ".$_GET['id_u']);
        $requete->execute();
        echo "<meta http-equiv='refresh' content='2; URL=index.php' />";
        die("Informations mises à jour.");

       /* $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $bdd->prepare("UPDATE ? SET ? = ? WHERE id_u = ?");
        $statement->execute([$table,$champ,$new_value,$id_u]);
        if($reponse = $requete->fetch())
        {
		$id_u = $_SESSION['id'];
		$userInit->updateValues($id_u,'email',$_POST['email'], $bdd, 'users');
		$userInit->updateValues($id_u,'nom',$_POST['nom'], $bdd, 'users');
		$userInit->updateValues($id_u,'prenom',$_POST['prenom'], $bdd, 'users');
		$userInit->updateValues($id_u,'mdp',$_POST['mdp'], $bdd, 'users');*/
	}
	else{
		die('Erreur 403');
	}