<?php

require "Core/CoreConfigBddSession.php";
require "Core/CoreConfigServerInfos.php";

if(!empty($_GET['page']) AND is_file('Controllers/Controller'.$_GET['page'].'.php'))
{
    include('Controllers/Controller'.$_GET['page'].'.php');
}
else
{
    include('Controllers/ControllerAccueil.php');
}

?>