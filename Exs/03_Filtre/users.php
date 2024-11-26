<?php

$users = ["William", "Alex", "Charlie", "David"];
$query = $_GET['q'];

if ($query !== "") {
    $results = array_filter($users, function ($user) use ($query) {
        return stripos($user, $query) !== false;
    });
} else {
    $results = $users;
}
;
echo json_encode(array_values($results));

?>

