<?php
	require "Models/ModelClassesInit.php";
	require "Models/ModelInit.php";
	require "Models/ModelConfigBddSession.php";
	if(isset($_SESSION['connecte']) && ($_SESSION['connecte'] == true) && ($_SESSION['lvl'] != 3)){
		if(($_SESSION['lvl'] == 1)){
			header("Location:index.php?page=EspaceEleve");
		}
		if(($_SESSION['lvl'] == 2)){
			header("Location:index.php?page=EspaceEnseignant");
		}
	}
	else{
		ob_start();
		include (dirname(__FILE__).'/../Views/content/ViewEspaceAdmin.php');
		$content = ob_get_contents();
		ob_end_clean();
		include (dirname(__FILE__).'/../Views/template.php');
	}
?>