<?php include '../config.php';$id = $_GET['id'];$query = $pdo->prepare("SELECT photo FROM animaux WHERE id = ?");$query->execute([$id]);$animal = $query->fetch();if ($animal && file_exists($animal['photo'])) {unlink($animal['photo']);}$stmt = $pdo->prepare("DELETE FROM animaux WHERE id = ?");$stmt->execute([$id]);header('Location: admin.php');exit;?>