<?php
        $targetDirectory = "uploads/";

        if (isset($_FILES["fileToUpload"])) {
            $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully.";
            } else {
                echo "Sorry, there was an error uploading your file.";
        }
    }
    
?>