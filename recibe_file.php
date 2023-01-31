<?php
if (!file_exists('archivos')) {
    mkdir('archivos', 0777);
}
  
move_uploaded_file($_FILES['file']['tmp_name'], 'archivos/' . $_FILES['file']['name']);
  
echo "success";
die();

?>