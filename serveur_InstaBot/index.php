<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../mainRaspberryDependencies/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SkY_InstaBot</title>
</head>

<body>
<?php include "../utilities/navbar.html" ?>
<div class="container">
    <!--<div class="row">-->
    <div class="col-md-10">
        <h1>Bienvenue !</h1>
        <p>Vous trouverez sur cette page un SMTP Spammer. Qu'est ce que c'est me direz vous ?<br />
            Un serveur SMTP est un serveur mail, et spam signifie envoie en grande quantité ici.
            Le formulaire suivant va vous demander l'adresse mail que vous voulez spam et le champ dessous le nombre de mails à envoyer.<br />
            <b>Attention : </b> Une fois un spam lancé, il ne peut être arrêté.</p>
        <form enctype="multipart/form-data" action="./controller.php?func=storeImg" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Image</b></label><br />
                <input type="file" id="profile_pic" name="pic"
                       accept=".jpg, .jpeg, .png">
                <small id="emailHelp" class="form-text text-muted">Cliquez ci-dessus pour ajouter la photo à poster.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputSubject1"><b>Description sous l'image</b></label>
                <input type="text" class="form-control" id="exampleInputSubject1" aria-describedby="emailHelp"
                       placeholder="Objet" name="description" >
            </div>
            <!--            <div class="form-check">-->
            <!--                <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
            <!--                <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
            <!--            </div>-->
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php

            if ($_GET['imgNotUploaded']){
                echo 'Image non importée sur le serveur. J\'ai du faire une erreur quelque part.';
            }

            if ($_GET['jsonFileNotCreated']){
                echo 'Fichier JSON non créé.';
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
