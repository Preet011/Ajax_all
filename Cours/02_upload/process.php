<?php

$name = $_POST['name'];
$email = $_POST['email'];

echo "Nom de la personne :" . htmlspecialchars($name) . " et son email " . htmlspecialchars($email);

?>