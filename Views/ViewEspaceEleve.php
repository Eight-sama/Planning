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

<body background="img/wp.jpg">
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
                <div class="user-view">
                    <div class="background">
                        <img src="http://lorempixel.com/400/200/">
                    </div>
                    <a href="#!user"><img class="circle" src="http://lorempixel.com/295/200/"></a>
                    <a href="#!name"><span class="white-text name">Théo Huchard</span></a>
                    <a href="#!email"><span class="white-text email">theo.huchard@gmail.com</span></a>
                </div>
            </li>
            <li><a href="#!">Cours</a></li>
            <li><a href="#!">Élèves</a></li>
            <li><a href="#!">Bulletins</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a href="">Planning</a></li>
        </ul>
        <div class="row">
            <div class="col m4">
                <a href="Views/connexion-enseignant.php">
                    <div class="hoverable white black-text text-darken-2 lighten-2">
                        <div class="card-panel hoverable col m12">
                            <h5>Devoirs à faire</h5>
                            <!--<p class="card-panel valign-wrapper center">Aucun devoir à faire pour le moment</p>-->
                            <div class="card-panel">
                                <div id="matiere"><span><b>Test</b></span></div>
                                <div id="content"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt tempora porro dolor incidunt quod explicabo consequatur temporibus minima error natus perspiciatis, laboriosam magnam praesentium ea! Obcaecati magnam earum, officiis. Quas.</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col m4">
                <a href="Views/connexion-enseignant.php">
                    <div class="hoverable white black-text text-darken-2 lighten-2">
                        <div class="card hoverable col s12">
                            <h5 class="header black-text">Dernières notes</h5>
                            <div class="card horizontal"><!--
                                <div class="card-image">
                                    <img src="https://lorempixel.com/100/200/nature/6">
                                </div>-->
                                <div class="card-stacked">
                                    <div class="card-content black-text">
                                        <p><b>Mathématiques</b> : 20/20</p>
                                    </div>
                                    <div class="card-action">
                                        Coefficient : 4
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col m4">
                <a href="Views/connexion-enseignant.php">
                    <div class="hoverable white black-text text-darken-2 lighten-2">
                       <div class="card hoverable col s12">
                        <h5>Messages récents</h5>
                        <div class="card-panel valign-wrapper">
                            <div class="col s3">
                                <img src="http://lorempixel.com/200/200/" alt="" class="circle responsive-img">
                            </div>
                            <div class="col s9">
                                <span class="black-text">
                                This is a square image. Add the "circle" class to it to make it appear circular.
                            </span>
                            </div>
                        </div>
                        </div>
                    </div>
                </a>
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
