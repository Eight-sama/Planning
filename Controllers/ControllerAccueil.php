<?php
	require "Models/ModelConfigBddSession.php";
	require "Models/ModelClassesInit.php";
	require "Models/ModelInit.php";
	
	if(isset($_SESSION['connecte']) && ($_SESSION['connecte'] == true)){
		header("Location:index.php?page=Espace");
	}
	else{
		ob_start();
		include (dirname(__FILE__).'/../Views/content/ViewAccueil.php');
		$content = ob_get_contents();
		ob_end_clean();
		include (dirname(__FILE__).'/../Views/template.php');
	}
?>