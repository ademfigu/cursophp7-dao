<?php

$conn = new PDO("mysql:host=localhost:3306;dbname=dbphp7", "root", "Giallo-Apto.242");

$conn->beginTransaction();

$stmt = $conn->prepare("delete from tb_usuarios where idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();

echo "Delete OK!";

?>