<?php
	require "Models/ModelConfigBddSession.php";
	require "Models/ModelClassesInit.php";
	require "Models/ModelInit.php";

	if($_SESSION['lvl'] == 3 && !isset($_GET['id_u'])){
		ob_start();
		include (dirname(__FILE__).'/../Views/content/ViewChoixBulletin.php');
		$content = ob_get_contents();
		ob_end_clean();
		include (dirname(__FILE__).'/../Views/template.php');
	}
	else{
		ob_start();
		include (dirname(__FILE__).'/../Views/content/ViewBulletin.php');
		$content = ob_get_contents();
		ob_end_clean();
		include (dirname(__FILE__).'/../Views/template.php');
	}
?>