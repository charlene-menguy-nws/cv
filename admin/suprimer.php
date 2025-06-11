<?php
include '../config/database.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM competences WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: index.php');
exit;
