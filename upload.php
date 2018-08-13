<?php
require 'asset/autoload.php';
if (isset($_POST['salope'])) {
  if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
  }
  if (isset($_POST['sujet'])) {
    $gender = $_POST['sujet'];
  }
  if (isset($_POST['choix'])) {
    $gender = $_POST['choix'];
  }
  $name =filter_var($_POST['name'],FILTER_SANITIZE_MAGIC_QUOTES);
  $first_name = filter_var($_POST['first_name'],FILTER_SANITIZE_MAGIC_QUOTES);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $msg = filter_var($_POST['msg'],FILTER_SANITIZE_MAGIC_QUOTES);
  $handle = new upload($_FILES['image_field']);

  // 2. Validation
  if ( filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
    if (!empty($email)&&!empty($msg)){
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
    }
    else {
      echo "<script>alert('adresse mail ou message vide.!');</script>";
    }

  } else {
    echo "<script>alert('Cette adresse email nettoyée n'est pas valide. Désolé.');</script>";
  }
}
?>
