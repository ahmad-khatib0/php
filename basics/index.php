<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
echo "this is a an example with ++ before the variable";
$counter = 0;
while ($counter <= 5) {
    echo $counter . " ";
    ++$counter;
}

echo "this is a an example with ++ after the variable";
$counter = 0;
while ($counter <= 5) {
    echo $counter . " ";
    $counter++;
}
echo "<br>";

do {
    $roll = rand(1, 6);
    echo '<p> you rolled a ' . $roll . '</p>';
    if ($roll == 6) {
        echo "<p>  you win! </p> ";
    } else {
        echo '<p> sorry, you didn\'n win , better luck next  ';
    }
} while ($roll != 6);

$addToEndOfAnArray = ['1', 2, 'three'];
$addToEndOfAnArray[] = 'This [] will add this string element to the end ';
var_dump($addToEndOfAnArray);

?>
</body>

</html>