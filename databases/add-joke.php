<?php
include 'init.php';

if (isset($_POST['joketext'])) {
  try {
    $sql = 'INSERT INTO `joke` SET
    `joketext` = :joketext,
    `jokedate` = CURDATE()';

    // When using prepared statements, you don’t need quotes because the database (in
    // our case, MySQL) is smart enough to know that the text is a string and it will be
    // treated as such when the query is executed.
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':joketext', $_POST['joketext']);
    $stmt->execute();

    $output = 'joke added ';
    header('Location: index.php');
  } catch (PDOException $e) {
    $title  = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
  }
} else {
  $title = 'Add a new joke';
  ob_start();
  include 'templates/addjoke.html.php';
  $output = ob_get_clean();
}
include 'templates/output.html.php';