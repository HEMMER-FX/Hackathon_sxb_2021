<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/style.css" />
       <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit-icons.min.js"></script>


<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    </head>
    <body>
    
    <nav class="uk-navbar uk-navbar-container uk-margin uk-navbar-transparent"  uk-offcanvas>
    <a href="index.php"><img src="./Images/logo.png" width="60px"></a>    
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="#">
            <button class="uk-button uk-button-default uk-margin-small-right uk-button-secondary" type="button" uk-toggle="target: #offcanvas-nav-primary"><span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></button>
            <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                <?php include 'form.php' ?>

                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                    <li><h1>Discover Mars</h1></li>
                        <li class="uk-active"><a href="index.php">Accueil</a></li>
                        <li class="uk-parent">
                            
                            <a href="voyage.php">Voyages</a>
                            <a href="vaisseau.php">Vaisseau</a>
                            <a href="reparation.php">Reparations</a>
                            <a href="gastronomie.php">Space Eat</a>
                        </li>
                      
                    </ul>

                </div>
            </div>
        </a>
    </div>
</nav>
 
        
<video autoplay muted loop id="myVideo">
  <source src="./Images/espace.mp4" type="video/mp4">
</video>




    
    </body>
</html>