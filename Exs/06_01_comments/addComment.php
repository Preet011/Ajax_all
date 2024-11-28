<?php

include 'data.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST['pseudo'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments(pseudo, comment) VALUES (:pseudo, :comment)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':pseudo', $pseudo);
    $stmt->bindValue(':comment', $comment);
    $stmt->execute();

    echo 'Comment added';
}

$pdo = null;
?>