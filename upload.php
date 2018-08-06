<?php
require 'vendor/autoload.php';
  $handle = new upload($_FILES['image_field']);
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
?>
