<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/own.css">
    <script src="https://use.fontawesome.com/068f14e508.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body background="Views/img/wp.jpg">
    <div class="row" id="header">
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <nav class="light-blue darken-4">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons"><i class="fa fa-th"></i></i></a>
                </ul>
                <a href="#!" class="brand-logo center">Jetplanning</a>
            </div>
        </nav>
    </div>
    <div class="container">

        <ul id="slide-out" class="side-nav">
            <li>
                <div class="grey center">
                        <div class="z-depth-2 grey">Veuillez vous connecter pour accéder au service utilisateur.</div>
                </div>
            </li>
            <li><a class="grey-text" href="#!" disabled>Cours</a></li>
            <li><a class="grey-text" href="#!" disabled>Bulletins</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a class="grey-text" href="" disabled>Planning</a></li>
        </ul>
        <!--<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>-->
        <div class="row">
            <div class="col s4 offset-s4">
                <a href="index.php?page=ConnexionEnseignant"><div class="card-panel hoverable indigo white-text text-darken-2 lighten-2"><i class="fa fa-user"></i><span> Connexion enseignant</span></div></a>
                <a href="index.php?page=ConnexionEleve"><div class="card-panel hoverable indigo white-text text-darken-2 lighten-2"><i class="fa fa-user-o"></i><span> Connexion élève</span></div></a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".button-collapse").sideNav();
        });

    </script>
</body>

</html>
