<?php
        if (isset($_POST['submit'])) {
            echo "<p>" . $_POST['myfile'] . " => file input successfull</p>";
            $target_dir = "Music ";
            $file_name = $_FILES['myfile']['name'];
            $file_tmp = $_FILES['myfile']['tmp_name'];

            if (move_uploaded_file($file_tmp, $target_dir . $file_name)) {
                echo "<h1>File Upload Success</h1>";
            } else {
                echo "<h1>File Upload not successfull</h1>";
            }
        }
        ?>
