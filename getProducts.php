<?php
include 'db.php';

$limit = 20;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
$offset = $page * $limit;

$stmt = $pdo->prepare("SELECT * FROM produit LIMIT :limit OFFSET :offset");
$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produits);
?>
