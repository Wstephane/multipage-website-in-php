<?php
  $handle = new upload($_FILES['image_field']);
  if ($handle->uploaded) {
    $handle->file_name_body_add    = "_".round(microtime(true));
    if ($handle->file_src_name_ext === 'jpg' || $handle->file_src_name_ext === 'jpeg' || $handle->file_src_name_ext === 'png' || $handle->file_src_name_ext === 'gif')
    $handle->process('/home/user/files/');
    if ($handle->processed) {
      $handle->clean();
    } else {
      echo 'error : ' . $handle->error;
    }
  }
?>
