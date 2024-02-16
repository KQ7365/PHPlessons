<?php
require_once 'database.php';
//null operator in this ?? '' to do a check. Need it for POST method (of course in this case delete method)
$isDeleteRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'delete');

if ($isDeleteRequest) {
    $id = $_POST['id'];

    $sql = 'DELETE FROM posts WHERE id = :id';

    $stmt = $pdo->prepare($sql);

    $params = ['id' => $id];

    $stmt->execute($params);

    header('Location: index.php');
    exit;
}
?>