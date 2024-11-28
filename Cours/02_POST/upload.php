<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_FILES['photo'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $file = $_FILES['photo'];

    if($file['error'] === UPLOAD_ERR_OK) {
        $upload = 'uploads/';
        $uploadFile = $upload . basename($file['name']);

        if(move_uploaded_file($file['tmp_name'], $uploadFile)) {
            echo "<p>Reçu : </p>";
            echo "<p>Nom :" . $name . "</p>";
            echo "<p>Email :" . $email . "</p>";
            echo "<p>Fichier téléchargé :" . $uploadFile . "</p>";
            echo "<img src='$uploadFile' alt='photo de profil' />";
        }
    }
} else {
    echo "Problème de soumission";
}

?>