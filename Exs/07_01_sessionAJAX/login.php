<?php
session_start();
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$name' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->fetch_assoc()) {
        $_SESSION['username'] = $name;
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => "Nom d'utilisateur ou mot de passe incorrect"]);
    }
}

$conn->close();
?>