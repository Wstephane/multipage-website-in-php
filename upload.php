<?php
require 'vendor/autoload.php';
$gender = $_POST['gender'];
$name =filter_var($_POST['name'],FILTER_SANITIZE_MAGIC_QUOTES);
$first_name = filter_var($_POST['first_name'],FILTER_SANITIZE_MAGIC_QUOTES);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$sujet = $_POST['sujet'];
$msg = filter_var($_POST['msg'],FILTER_SANITIZE_MAGIC_QUOTES);
$choix = $_POST['choix'];
$handle = new upload($_FILES['image_field']);

// 2. Validation
if (true === filter_var($email, FILTER_VALIDATE_EMAIL)) {
  if ($handle->uploaded) {
    // Ajout d'une fin pour que le fichier soi unique
    $handle->file_name_body_add    = "_".round(microtime(true));
  // Vérification du fichier
    if ($handle->file_src_name_ext === 'jpg' || $handle->file_src_name_ext === 'jpeg' || $handle->file_src_name_ext === 'png' || $handle->file_src_name_ext === 'gif'){
    $handle->process('./upload');
      if ($handle->processed) {
        include 'gmail.php';
        $mail->addAttachment($handle->file_dst_pathname);
        $handle->clean();
      } else {
        echo 'error : ' . $handle->error;
      }
  }
  }

} else {
	echo "Cette adresse email nettoyée n'est pas valide. Désolé.";
}
?>
