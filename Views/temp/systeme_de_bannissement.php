
    
<?php

$pdo = dbConnect();
$userIp = gethostbyname($_SERVER['SERVER_NAME']);

$limite = $pdo->query("SELECT * ban WHERE ip = '".$userIp."'")->fetch(PDO::FETCH_ASSOC)['limite'];

if($limite){
    $limite = $limite->fetch(PDO::FETCH_ASSOC)['limite'];
}
$isStillBanned = strtotime($limite) > strtotime(time() + 60 * 5);

if(!$isStillBanned){
    unset($_SESSION['nbFailedAuth']);
    $pdo->query("DELETE FROM ban WHERE ip = '$userIp'");
}
else{
    die("Vous êtes ban !");
}

if(isset($_POST)){

    extract($_POST);
    extract($_SESSION);

    $login = htmlentities($login);
    $password = sha1($password);
    $req = $pdo->prepare("SELECT COUNT(*) as nb FROM users WHERE login = ? AND password = ?");
    $req->execute([$login, $password]);
    $has = $pdo->fetch(PDO::FETCH_ASSOC)['nb'];

    if($has){
        
        header('Location: profil.php');
        die();
        
    }

    else{

        if(!isset($nbFailedAuth)){
            $nbFailedAuth = 1;
        }            
        else{
            $nbFailedAuth += 1;
        }

        if(nbFailedAuth > 3){
            $ipUser = $_SERVER['REMOTE_ADDR'];
            $pdo->query("INSERT  INTO ban (ip) VALUES ('$userIp')");
        }
    }
}

?>