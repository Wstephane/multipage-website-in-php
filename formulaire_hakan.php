<?php include 'upload.php' ?>

<html>
<<<<<<< HEAD
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <title>Formulaire</title>
</head>
<body>

<div class="container">

<div class="form-sec">
  <h4>Contact form</h4>

  <form name="qryform" id="qryform" enctype="multipart/form-data" method="post" action="formulaire_hakan.php" onsubmit="return(validate());" novalidate="novalidate">

   <div class="form-group">
    <input type="radio" name="gender" value="madame" >
    <label for="Madame">Mme</label>
    <input type="radio" name="gender" value="mademoiselle">
    <label for="Mademoiselle">Melle</label>
    <input type="radio" name="gender" value="monsieur">
    <label for="Monsieur">Mr</label>
   </div>


    <div class="form-group">
      <label>Nom:</label>
      <input type="text" class="form-control" id="name" placeholder="Entrer Nom" name="name">
    </div>
    <div class="form-group">
      <label>Prénom:</label>
      <input type="text" class="form-control" id="first_name" placeholder="Entrer Prénom" name="first_name">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
    </div>

    <div class="form-group">
      <label for="sujet">Objet:</label>
      <select class="form-control" id="sujet" name="sujet">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>

    <div class="form-group">
      <label>Votre message:</label>
      <textarea name="msg" class="form-control" id="msg" placeholder="Entrer votre message"></textarea>
    </div>

    <p>Pick up an image to upload, and press "upload" </p>





    <div class="form-group">
     <input type="radio" name="choix" value="html" >
     <label for="html">HTML</label>
     <input type="radio" name="choix" value="texte">
     <label for="texte">Texte</label>
    </div>

      <input type="file" size="32" name="image_field" value="">
      <button type="submit" class="btn btn-default"name='salope'>Submit</button>

  </form>
  </div>
=======
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hakan Poyraz et Stéphane Wyns">

    <title>Télé-Accueil Bruxelles - Quelqu'un à qui parler dans l'anonymat - Formulaire</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> -->

  </head>
  <body>

    <div class="container">
      <div class="form-sec">
        <h4>Formulaire de Contact</h4>
        <form name="qryform" id="qryform" enctype="multipart/form-data" method="post" action="upload.php" onsubmit="return(validate());" novalidate="novalidate">
        <div class="form-group">
          <input type="radio" name="gender" value="madame" >
          <label for="Madame">Mme</label>
          <input type="radio" name="gender" value="mademoiselle">
          <label for="Mademoiselle">Melle</label>
          <input type="radio" name="gender" value="monsieur">
          <label for="Monsieur">Mr</label>
        </div>

        <div class="form-group">
          <label>Nom:</label>
          <input type="text" class="form-control" id="name" placeholder="Entrer votre Nom" name="name">
        </div>
        <div class="form-group">
          <label>Prénom:</label>
          <input type="text" class="form-control" id="first_name" placeholder="Entrer votre Prénom" name="first_name">
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" class="form-control" id="name" placeholder="Enter votre Email" name="email">
        </div>

        <div class="form-group">
          <label for="sujet">Objet:</label>
          <select class="form-control" id="sujet" name="sujet">
            <option>Devenir bénèvole</option>
            <option>Demande d'information génèrale</option>
            <option>Demande d'information sur les donations</option>
          </select>
        </div>

        <div class="form-group">
          <label>Votre message:</label>
          <textarea name="msg" class="form-control" id="msg" placeholder="Entrer votre message"></textarea>
        </div>

        <div class="form-group">
          <p>Format de réponse souhaité</p>
          <input type="radio" name="choix" value="html" >
          <label for="html">HTML</label>
          <input type="radio" name="choix" value="texte">
          <label for="texte">Texte</label>
        </div>

        <p>Prenez une image à uploader et appuyer sur "choisir une image" puis sur "ouvrir".</p>
        <input type="file" size="32" name="image_field" value="">
        <button type="submit" class="btn btn-default">Envoyer</button>

        </form>
      </div>
    </div>
>>>>>>> c166f5818d3c45d2e534be561b5532e6ba1d1d87


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
