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
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <header>
    <?php include 'navbar.php'; ?>
  </header>

  <body>
    <div class="container">
        <h1>Contact</h1>

        <form class="form-horizontal" role="form" method="POST" action="upload2.php" enctype="multipart/form-data">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="mme" value="option1" checked>
                <label class="form-check-label" for="mme">Mme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="melle" value="option2">
                <label class="form-check-label" for="melle">Melle</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="mr" value="option3">
                <label class="form-check-label" for="mr">Mr.</label>
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
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="preference">Préférence</label>
                    <select class="custom-select mr-sm-2" id="preference">
                        <option selected>Devenir bénèvole</option>
                        <option value="1">Demande d'information générale</option>
                        <option value="2">Demande d'informatinon pour les dons</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Votre message</label>
                <textarea class="form-control" id="message" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="fichier">Document</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                <input type="file" class="form-control-file" id="fichier">
            </div>
            <div class="form-group">
                <p>Format de réponse souhaité</p>
                <input class="form-check-label" type="radio" name="type" id="formatFichier" value="option1" checked>
                <label class="form-check-label" for="formatFichier">HTML</label>
                <input class="form-check-label" type="radio" name="type" id="formatFichier2" value="option2">
                <label class="form-check-label" for="formatFichier2">Texte</label>
            </div>
            <button type="submit" class="btn btn-default">Contactez-nous</button>
        </form>
    </div>
    <?php

        // Sanitisation

        $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
        $prenom = filter_var($POST['prenom'], FILTER_SANITIZE_STRING);
        $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        // Validation

        if (true === filter_var($age, FILTER_SANITIZE_NUMBER_INT)){
            echo "C'est un nombre, ok";
        } else {
            echo "Ce n'est pas un nombre, taper un autre nombre";
        }

        if (true === filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Cette adresse email nettoyée est considérée comme valide.";
        } else {
            echo "Cette adresse email nettoyée n'est pas valide. Désolé";
        }


        // Création d'une liste blanche des extensions autorisées
        $controle_extensions_autorisees = ['jpg', 'jpeg', 'png', 'gif'];

        // Récupération du nom du fichier
        $fichier_upload_nom = $_FILES['fichier']['name'];

        // Récupération de l'extension du fichier
        $fichier_extension =  strtolower(pathinfo($fichier_upload_nom, PATHINFO_EXTENSION));

        // Vérification de l'extension du fichier
        if(!in_array($fichier_extension, $controle_extensions_autorisees)){
            echo 'L\'extension du fichier n\'est pas autorisée';
        }

        // Ce tableau contient la liste des types MIME autorisés:
        // On autorise uniquement les fichiers image de type gif, jpeg et png
        $controle_type_mime_autorises = ['image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

        $fichier_upload_source = $_FILES['fichier']['tmp_name'];

        $controle_type_mime_autorises = ['image/gif', 'image/jpeg', 'image/pjpeg', 'image/png'];

        $fichier_upload_source = $_FILES['fichier']['tmp_name'];
        $fichier_mime_type = mime_content_type($fichier_upload_source);

        // On vérifie que le type MIME appartient à la liste blanche
        if(!in_array($fichier_mime_type, $controle_type_mime_autorises)){
            echo 'Le type du fichier n\'est pas autorisée';
        }

        // Définition de la taille maximale autorisée à 100Ko, soit 100000 octets
        $controle_taille_maximum = 100000;

        $fichier_upload_taille = $_FILES['fichier']['size'];

        if($fichier_upload_taille > $controle_taille_maximum){
            echo 'La taille du fichier est de '.$fichier_upload_taille.' et dépasse la taille autorisée de '.$controle_taille_maximum;
        }

        // Minimun pour accepter le formulaire
        if (empty($nom) AND empty($prenom) AND empty($age)) {
            header('Location: http://tonsite/machin/contact2.php', true, 303);
            echo "Remplissez le formulaire complètement. Merci !";
            // !!! A CHANGER l'ADRESSE !!!
        }

    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
