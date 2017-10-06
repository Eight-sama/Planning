<?php	
	require "Models/ModelConfigBddSession.php";
	require "Models/ModelClassesInit.php";
	require "Models/ModelInit.php";
	if(isset($_SESSION['connecte']) && ($_SESSION['connecte'] == true)){
		if(($_SESSION['lvl'] == 1)){
			ob_start();
			include (dirname(__FILE__).'/../Views/content/ViewEspaceEleve.php');
			$content = ob_get_contents();
			ob_end_clean();
			include (dirname(__FILE__).'/../Views/template.php');
		}
		if(($_SESSION['lvl'] == 2)){
			ob_start();
			include (dirname(__FILE__).'/../Views/content/ViewEspaceEnseignant.php');
			$content = ob_get_contents();
			ob_end_clean();
			include (dirname(__FILE__).'/../Views/template.php');
		}
		if(($_SESSION['lvl'] == 3)){
			ob_start();
			include (dirname(__FILE__).'/../Views/content/ViewEspaceAdmin.php');
			$content = ob_get_contents();
			ob_end_clean();
			include (dirname(__FILE__).'/../Views/template.php');
		}
	}
	else{
		echo "<meta http-equiv='refresh' content='5; URL=index.php?page=Accueil' />";
        die("Impossible d'accéder à l'espace membre, vous n'êtes pas connecté, retour à l'accueil dans 5 secondes.");
	}
?>