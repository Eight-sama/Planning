<?php
	require "Models/ModelConfigBddSession.php";
	require "Models/ModelClassesInit.php";
	require "Models/ModelInit.php";
	require "Models/ModelModifierUtilisateur.php";

	ob_start();
	include (dirname(__FILE__).'/../Views/content/ViewOnModifEnseignant.php');
	$content = ob_get_contents();
	ob_end_clean();
	include (dirname(__FILE__).'/../Views/template.php');