<?php
	require "Models/ModelClassesInit.php";
	require "Models/ModelInit.php";
	require "Models/ModelConfigBddSession.php";
	if(isset($_SESSION['connecte']) && ($_SESSION['connecte'] == true) && ($_SESSION['lvl'] != 1)){
		if(($_SESSION['lvl'] == 2)){
			header("Location:index.php?page=EspaceEnseignant");
		}
		if(($_SESSION['lvl'] == 3)){
			header("Location:index.php?page=EspaceAdmin");
		}
	}
	else{
		ob_start();
		include (dirname(__FILE__).'/../Views/content/ViewEspaceEleve.php');
		$content = ob_get_contents();
		ob_end_clean();
		include (dirname(__FILE__).'/../Views/template.php');
	}
?>