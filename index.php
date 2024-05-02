<?php
  require_once __DIR__ . '/Model/Movie.php';
  $alien = new Movie('Alien', ['Horror', 'Thriller', 'Action'], 1979);
  $jaws = new Movie('Jaws', ['Horror','Action','Drama'], 1975);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>
  <?php
  echo  $alien->getTitle();
  ?>
  </h2>
  <ul>
    <?php foreach ($alien->genres as $genre) : ?>
      <li>
          <?php echo $genre ?>
      </li>
    <?php endforeach ?>
  </ul>
  <p>
  <?php
  echo  $alien->year;
  ?>
  </p>
  <h2>
  <?php
  echo  $jaws->getTitle();
  ?>
  </h2>
  <ul>
    <?php foreach ($jaws->genres as $genre) : ?>
      <li>
          <?php echo $genre ?>
      </li>
    <?php endforeach ?>
  </ul>
  <p>
  <?php
  echo  $jaws->year;
  ?>
  </p>
</body>
</html>