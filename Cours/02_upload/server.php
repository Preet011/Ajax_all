<?php

$data = json_decode(file_get_contents('php://input'), true);

// print_r($data);
if(isset($data['name']) && isset($data['email'])) {
    $name = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
  echo "Nom de la personne avec JSON:" . $name . " et son email " . $email;  
}



?>