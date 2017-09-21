<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jetplanning</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="Views/css/font-awesome.min.css">
    <link rel="stylesheet" href="Views/css/own.css">
    <script src="https://use.fontawesome.com/068f14e508.js"></script>
</head>

<body>
    <div class="row" id="header">
        <nav class="light-blue darken-4">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons"><i class="fa fa-th"></i></i></a>
                </ul>
                <a href="index.php?page=Accueil" class="brand-logo center">Jetplanning</a>
            </div>
        </nav>
    </div>
    <div class="container">
        <ul id="slide-out" class="side-nav">            
            <?= $menu->listHandler(); ?>
        </ul>
        <?= $content; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".button-collapse").sideNav();
            $('select').material_select();
            $('.carousel.carousel-slider').carousel({fullWidth: true});
        });
    </script>
</body>

</html>