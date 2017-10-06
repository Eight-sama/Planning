<?php
	if(isset($_POST['form_appreciation']) && isset($_GET['id_u'])){
		$content = $_POST['contenu'];
		$userInit->updateAppreGlobale($_GET['id_u'],$content);
		echo "<meta http-equiv='refresh' content='2; URL=index.php?page=Accueil&id_u=".$_GET['id_u']."' />";
		die("Connexion en cours...");
	}
	else{
		die('Erreur lors de la modification de l\'appréciation.');
	}