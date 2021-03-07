<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../mainRaspberryDependencies/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SkY_Spammer</title>
</head>

<body>
<?php include "../utilities/navbar.html" ?>
<div class="container">
    <!--<div class="row">-->
    <div class="col-md-10">
        <h1>Bienvenue !</h1>
        <p>Vous trouverez sur cette page l'emploi du temps du te<br />
        Un serveur SMTP est un serveur mail, et spam signifie envoie en grande quantité ici.
        Le formulaire suivant va vous demander l'adresse mail que vous voulez spam et le champ dessous le nombre de mails à envoyer.<br />
        <b>Attention : </b> Une fois un spam lancé, il ne peut être arrêté.</p>
        <form action="./controller.php?func=storeInfos" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Adresse mail</b></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="nom.prenom@domaine.com" name="mail" required>
                <small id="emailHelp" class="form-text text-muted">Je cherche un texte cool à mettre ici mais je n'ai pas trouvé.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputObject1"><b>Objet du mail</b></label>
                <input type="text" class="form-control" id="exampleInputSubject1" aria-describedby="emailHelp"
                       placeholder="Objet" name="subject" >
            </div>
            <div class="form-group">
                <label for="exampleInputMessage1"><b>Corps du mail</b></label>
                <input type="text" class="form-control" id="exampleInputMessage1" aria-describedby="emailHelp"
                       placeholder="Contenu" name="message" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><b>Nombre de mails à envoyer</b></label>
                <input type="number" min="1" max="999" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp"
                                                                 placeholder="0 - 999" name="amount" required>
            </div>
<!--            <div class="form-check">-->
<!--                <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--            </div>-->
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php

            if ($_GET['tooManyRequests']){
                echo 'Trop de requêtes sur le serveur veuillez patienter avant d\'en soumettre une nouvelle.';
            }

            ?>
        </form>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../mainRaspberryDependencies/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="../mainRaspberryDependencies/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="../mainRaspberryDependencies/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
