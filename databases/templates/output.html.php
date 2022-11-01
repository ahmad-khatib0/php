<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <link rel="stylesheet" href="jokes.css">
  <title><?=$title?></title>
</head>

<body>
  <nav>
    <?php include 'nav.html.php';?>
  </nav>
  <main>
    <?php if (isset($error)): ?>
      <p>
        <?=$error?>
      </p>
    <?php else: ?>
      <main>
        <?=$output?>
      </main>
    <?php endif;?>


  </main>
  <footer>
    <?php include 'footer.html.php';?>
  </footer>
</body>

</html>