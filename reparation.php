<?php
require_once "header.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/body.css" />

    <body>

    <div class="uk-container uk-text-center"> 
    <div class="titre">
    <span></span>
        <span></span>
        <span></span>
        <span></span>   
    <h1>Reparations</h1>
</div>
    </div>
    <div class="uk-container2 ">   
    <div class="switch" uk-switcher="animation: uk-animation-fade; toggle: > * ">
    <button class="button btn-1" type="button"><p>Presentation<p></button>
    <button class="button btn-1" type="button"><p>Prestation<p></button>
    <button class="button btn-1" type="button"><p>Piece en vente<p></button>
</div>

<ul class="uk-switcher uk-margin">
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
</ul>
    </div>
    <?php include 'resultat.php' ?>

    </body>
</html>
