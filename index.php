<?php
  include_once './setdata.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    ul{
      list-style: none;
    }
    .movie{
      padding: 2rem;
      display: flex;
      flex-direction: column;
      row-gap: 1rem;
    }
    .movie.blue{
      background-color: lightcyan;
    }
  </style>
  <title>Movie Class PHP</title>
</head>
<body>

<?php foreach($list_movies as $key => $movie): ?>
  <div class="movie <?php echo($key%2==0 ? 'blue' : ''); ?>">
    <?php echo $movie->getFullInfo(); echo $movie->crew->getFullCrew();?>
    <p><strong>Cast: </strong></p>
    <ul>
      <?php foreach($movie->crew->cast as $actor): ?>
        <?php echo '<li>' . $actor . '</li>';?>
      <?php endforeach ?>
    </ul>
    <form method="POST">
      <label for="<?php echo($key);?>"></label>
      <input type="number" min="0" max="10" step="any" name="<?php echo($key);?>" id="input_rating" placeholder="Rating..">
    </form>
  </div>
  <hr>
<?php endforeach ?>
  
</body>
</html>