<?php

file_uploads = On
 if (isset($_POST['submit'])) {
   echo "<p>" . $_POST['file'] . " => file input successfull</p>";
   $target_dir = "Music ";
   $file_name = $_FILES['file']['name'];
   $file_tmp = $_FILES['file']['tmp_name'];

   if (move_uploaded_file($file_tmp, $target_dir . $file_name)) {
      echo "<h1>File Upload Success</h1>";
   } else {
      echo "<h1>File Upload not successfull</h1>";
   }
 }
?>
