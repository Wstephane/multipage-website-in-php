<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hakan Poyraz et Stéphane Wyns">

    <title>Télé-Accueil Bruxelles - Quelqu'un à qui parler dans l'anonymat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/business-casual.min.css" rel="stylesheet"> -->

  </head>

  <body>

    <h1>Contact</h1>

    <form class="form-horizontal" role="form" method="POST" action="upload2.php" enctype="multipart/form-data">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Mme</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Melle</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox3">Mr.</label>
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" placeholder="Prénom">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
        </div>
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label class="mr-sm-2" for="preference">Preference</label>
                <select class="custom-select mr-sm-2" id="preference">
                    <option selected>Devenir bénèvole</option>
                    <option value="1">Demande d'information</option>
                    <option value="2">Informatino sur les dons</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="message">Votre message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="fichier">Document</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            <input type="file" class="form-control-file" id="fichier">
        </div>
        <div class="form-check form-check-inline">
            <p>Format de réponse souhaité</p>
            <input class="form-check-input" type="radio" id="formatFichier" value="option1">
            <label class="form-check-label" for="formatFichier">HTML</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="formatFichier2" value="option2">
            <label class="form-check-label" for="formatFichier2">Texte</label>
        </div>
        <button type="submit" class="btn btn-default">Contactez-moi</button>
    </form>

    <?php

    // Sanitisation

    // $nom = filter_var($_POST['nom'], )
    // $prenom = filter_var($POST['prenom'], )
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);


    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>