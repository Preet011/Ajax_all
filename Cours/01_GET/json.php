<?php

$users = [
    ["name" => "Jean", "email" => "jean@email.com"],
    ["name" => "Marie", "email" => "marie@email.com"],
    ["name" => "Max", "email" => "max@email.com"]
];

// on encode les données et renvoit sous format json
echo json_encode($users);

?>