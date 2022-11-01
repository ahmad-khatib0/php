<?php
include 'init.php';
try {

  //   $create = 'CREATE TABLE joke (
  //     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  //     joketext TEXT,
  //     jokedate DATE NOT NULL
  // ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

  //   $pdo->exec($create);
  // $output = "jokes table created successfully ";

  // $update       = 'UPDATE joke SET jokedate ="2000-10-10" WHERE joketext LIKE "%what%"';
  // $affectedRows = $pdo->exec($update);

  $select = 'SELECT `id` , `joketext` FROM `joke`';
  $jokes  = $pdo->query($select);

  // while ($row = $result->fetch()) {
  //   $jokes[] = array('id' => $row['id'], 'joketext' => $row['joketext']);
  // }

  $title = 'Joke list';
  ob_start();
  include 'templates/jokes.html.php';
  $output = ob_get_clean();

} catch (PDOException $e) {
  $output = "unable to connect to database " . $e->getMessage() . "error occured in: " . $e->getFile() . ':' . $e->getLine();
}

include "./templates/output.html.php";
