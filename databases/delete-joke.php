<?php
include 'init.php';

try {

  $sql  = 'DELETE FROM `joke` WHERE `id` = :id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $_POST['id']);
  $stmt->execute();
  header("Location: index.php");

} catch (PDOException $e) {
  $title  = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}

include 'templates/output.html.php';
?>