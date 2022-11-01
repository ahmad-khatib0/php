<?php foreach ($jokes as $joke): ?>
  <form action="delete-joke.php" method="POST">
    <blockquote>
    <p>
      <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?>
    </p>
    <input type="hidden" name="id" value="<?=$joke['id']?>">
    <button type="submit">
      delete x
    </button>
  </blockquote>
  </form>
<?php endforeach;?>