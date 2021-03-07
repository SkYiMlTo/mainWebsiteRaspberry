<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../mainRaspberryDependencies/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SkY_Menu</title>
</head>

<body>
<?php include "./utilities/navbar.html" ?>

<div class="container">
    <!--<div class="row">-->
    <div class="col-md-10">
        <h1>Salut Astreslgy !</h1>
        <p>Désolé de faire ça avec du retard mais j'étais en semaine d'examens.</p>
        <p></p>

        <h4>Exercice 4</h4>
        <p>1) Voici le graphique complété.</p>
        <img src="graph.png" alt="Italian Trulli">
        <p>2)<br />
            a) Probilité d'avoir une boule verte au premier tirage <b>et</b> une boule verte au second tirage. <br />
        b) Probilité d'avoir une boule verte au premier tirage <b>ou</b> une boule verte au second tirage.</p>
        <p>3)<br />
        Pour avoir deux boules de la même couleur on peut soit avoir deux boules vertes soit 2 boules rouges.<br />
        Avoir deux boules vertes : 0.6*0.6 = <b>0.36</b><br />
        Avoir deux boules rouges : 0.4*0.4 = <b>0.16</b><br />
        Tu as donc une probabilité de 0.52 d'avoir deux boules de la même couleur.</p>
        <p>4) <br />
        Probabilité de tirer 2 boules différentes = 1 - probabilité de trouver deux boules de la même couleur. Soit 1 - 0.52 = <b>0.48</b></p>
        <p>5)<br />
        Probabilité de tirer au moins une boule verte = 1 - probabilité de ne pas tirer de boule verte. Soit 1 - probabilité d'avoir deux boules rouges (calculé précédemment). Soit 1 - 0.16 = <b>0.84</b></p>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../mainRaspberryDependencies/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="../mainRaspberryDependencies/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../mainRaspberryDependencies/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>