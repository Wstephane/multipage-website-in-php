<html lang="fr">
  <head> 

    <meta name="description" lang="fr" content="Site web d'une ASBL d'écoute">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site Web d'une association d'écoute">
    <meta name="author" content="Hakan Poyraz et Stéphane Wyns">
    <meta name="keywords" content="Accueil télèphone solitude">

    <title>Télé-Accueil Bruxelles - Quelqu'un à qui parler dans l'anonymat - Donation et Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/telephone_fixe.ico"/>

  </head>
  <body>

    <header>
      <?php include 'navbar.php'; ?>
    </header>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Quelqu'un à qui parler dans l'anonymat</span>
      <span class="site-heading-lower">Télé-Accueil Bruxelles</span>
    </h1>

    <section class="page-section about-heading">
      <div class="container">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Envie de</span>
                  <span class="section-heading-lower">Faire un Don ?</span>
                </h2>
                <p>Bien qu'une partie de nos activités soient subsidiées par les pouvoirs publics, nous avons également besoin d’autres soutiens financiers pour fonctionner. Vous pouvez nous soutenir de différentes manières.</p>
                <p class="mb-0">Vous pouvez nous soutenir de différentes manières.</p>
                </br>
                <ul>
                  <li><strong><a href="https://www.paypal.com/donate/?token=UuDSXo7iCZ45CU9e5k0fKG05WoehZEYvDXYBdX2KzMADdYqQhga5lLz6AXAn6r1VxRu4nm&country.x=BE&locale.x=BE" target="_blank">Par PAYPAL</a></strong>.</br></li>
                  <li><strong>Don ponctuel</strong>. A partir de 40 €, une attestation fiscale vous sera envoyée.</li>
                  <li><strong>Ordre permanent</strong>. Facile, pratique et efficace. Un don mensuel, même petit, constitue une aide réelle sans être financièrement trop lourd pour vous.</li>
                  <li><strong>Don à l'occasion d'un événement familial ou professionnel</strong>. Le mariage, les anniversaires, le départ à la retraite sont des événements partagés avec les proches et les amis. N’hésitez pas à les associer à votre générosité en leur proposant un don plutôt que des fleurs ou un cadeau.</li>
                  <li><strong>Mention dans votre testament</strong>. De plus en plus de campagnes tentent de vous sensibiliser à l’importance de préparer votre testament. Votre soutien peut donc perdurer. La législation vous y aide grâce au leg en duo. Celui-ci peut être intéressant pour vos héritiers s’ils sont fort éloignés et donc fortement taxés. Pour plus d’informations, consultez le site internet <a href="https://www.notaire.be/donations-successions/les-successions/legs-en-duo" target="_blank">notaire.be</a>.</li>
                  <li><strong>Partenariat avec une entreprise</strong>. Nombreuses sont les entreprises qui désirent s’engager en soutenant une association ou un de ses projets. Télé-Accueil Bruxelles recherche de tels partenariats.</li>
                </ul>
                <p>Si vous souhaitez vous entretenir avec nous à ce propos, contactez nous avec notre formulaire <a href="#here2">ci-dessous</a> ou contactez Pascal Kayaert, directeur de Télé-Accueil Bruxelles, au 02 538 49 21</p>
                <p>Notre numéro de compte : BE75 0012 5446 7351</p>
                <p><strong>Merci pour votre générosité !</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container" id="here2">
      <div class="form-sec">
        <h4 class="white">Formulaire de Contact</h4>
        <form name="qryform" id="qryform" enctype="multipart/form-data" method="post" action="upload.php" onsubmit="return(validate());" novalidate="novalidate">
        <div class="form-group">
          <input type="radio" name="gender" value="madame" >
          <label class="white" for="Madame">Mme</label>
          <input type="radio" name="gender" value="mademoiselle">
          <label class="white" for="Mademoiselle">Melle</label>
          <input type="radio" name="gender" value="monsieur">
          <label class="white" for="Monsieur">Mr</label>
        </div>

        <div class="form-group">
          <label class="white">Nom:</label>
          <input type="text" class="form-control" id="name" placeholder="Entrer votre Nom" name="name">
        </div>
        <div class="form-group">
          <label class="white">Prénom:</label>
          <input type="text" class="form-control" id="first_name" placeholder="Entrer votre Prénom" name="first_name">
        </div>
        <div class="form-group">
          <label class="white">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter votre Email" name="email">
        </div>

        <div class="form-group">
          <label class="white" for="sujet">Objet:</label>
          <select class="form-control" id="sujet" name="sujet">
            <option>Devenir bénèvole</option>
            <option>Demande d'information génèrale</option>
            <option>Demande d'information sur les donations</option>
          </select>
        </div>

        <div class="form-group">
          <label class="white">Votre message:</label>
          <textarea name="msg" class="form-control" id="msg" placeholder="Entrer votre message"></textarea>
        </div>

        <div class="form-group">
          <p class="white">Format de réponse souhaité</p>
          <input type="radio" name="choix" value="html" >
          <label class="white" for="html">HTML</label>
          <input type="radio" name="choix" value="texte">
          <label class="white" for="texte">Texte</label>
        </div>

        <p class="white">Prenez une image à uploader et appuyer sur "choisir une image" puis sur "ouvrir".</p>
        <input type="file" size="32" name="image_field" value="">
        <button type="submit" class="btn btn-default">Envoyer</button>

        </form>
      </div>
    </div>

    <footer>
      <?php include 'footer.php'; ?>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
