<? include 'codex.php'; 
include 'codex2.php' ?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Discover Mars</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
        <link rel="stylesheet" href="css/Indexstyle.css" type="text/css">
        <link rel="stylesheet" href="css/body.css" type="text/css">
    </head>
    <body>
    <?php include 'form.php' ?>
        <div class = "IndexTitle">
            <h1>Discover Mars</h1>
        </div>
        <div class = "IndexSubTitle">
            <h3>How Mars Can Help You Live a Better Life ...</h3>
        </div>
        <div class="main-contain"></div>


    <div class="div">
        <div class="flex-1">
            <a href="voyage.php" >
            <button class="button btn-1">Voyage</button></a><br>
            <a href="vaisseau.php" >
            <button class="button btn-1">Vaisseau Spatial</button></a>
</br>
            <a href="reparation.php" >
            <button class="button btn-1">Reparation</button></a>
</br>
            <a href="gastronomie.php" >
            <button class="button btn-1">Space eat</button></a>
        </div>
    </div>
<?php include 'resultat.php' ?>
<?php 
foreach($tableau as $tab ){

    foreach($tab as $url2)
    { 
        foreach($url2 as $url3){
            echo '<li class="liste_foreach">' . "$url3" . '</li>';
            echo "<img style='width:200px;height:200px;margin-left:50%;' src='$url3'>";
           }  
    }   
}

  echo "<img src='$url3'>";


?>

<video autoplay muted loop id="myVideo">
  <source src="./Images/espace.mp4" type="video/mp4">
</video>
   
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    </body>
</html>
