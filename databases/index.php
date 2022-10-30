<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=jokes;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $output = "database connected successfully ";
} catch (PDOException $e) {
    $output = "unable to connect to database " . $e;
}

include "./templates/output.html.php";