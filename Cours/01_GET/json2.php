

<?php
$encode = $_GET["data"];

// On doit décoder les données qui ont été encodées côté front via le JS
$user = json_decode($encode);

$name = $user['name'];
$email = $user['email'];

echo "Nom :" . $name . " et "  . $email;


?>