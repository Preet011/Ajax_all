<?php
include 'data.php';

$sql = "SELECT * FROM comments ORDER BY date DESC";
$stmt = $pdo->query($sql);
// $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($stmt);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
echo "<p><strong>".
htmlspecialchars($row['pseudo']) .
"</strong>: <br>" . htmlspecialchars($row['comment']).
"<br> <small>" . htmlspecialchars($row['date']).
"</small>"
."</p>";
}
$pdo = null;



?>