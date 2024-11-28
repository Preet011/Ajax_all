<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $poste = $_POST['poste'];
    $logo = $_FILES['logo'];

if (!empty($name) && !empty($email) && !empty($number) && !empty($poste)) {

    if($logo['error'] === UPLOAD_ERR_OK) {
        $upload = 'uploads/';
        $uploadFile = $upload . basename($logo['name']);
        if(move_uploaded_file($logo['tmp_name'], $uploadFile)){
    echo
    "<div  style='border: 10px solid'>
    <h2>Carte de viste</h2>
    <p><b>Nom:</b>" . htmlspecialchars($name) . "</p>" .
    "<p><b>Email:</b>" . htmlspecialchars($email) ."</p>".
    "<p><b>Phone:</b>" . htmlspecialchars($number) ."</p>".
    "<p><b>Poste:</b>". htmlspecialchars($poste). "</p>".
    "<img src='$uploadFile' alt='logo' style='width:100px; height: 100px;'/>".
    "</div>";
}
}
} else {

echo " Error: Input empty";
}