<?php
include (dirname(__FILE__).'/../Classes/ClassUser.php');
include (dirname(__FILE__).'/../Classes/ClassForm.php');

$userSession = new ClassUser;
$userSession->formConnect('submit','email','name');
$form = new ClassForm;

include (dirname(__FILE__).'/../Views/ViewConnexionEleve.php');