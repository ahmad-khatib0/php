<?php
$name = $_GET['firstname'];
$lastName = $_GET['lastname'];

// $name = $_POST['firstname'];//for post methods
// $lastName = $_POST['lastname'];//for post methods

echo "welcome to our website "
. htmlspecialchars($name, ENT_QUOTES, "UTF-8") . " " .
htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . "!";
