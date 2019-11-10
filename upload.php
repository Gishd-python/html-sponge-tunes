<?php
file_uploads = On
$target_dir = "Music/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if($imageFileType != "mp3") {
    echo "Sorry, only mp3 files allowed.";
    $uploadOk = 0;
}
?>
