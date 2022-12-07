<?php

include_once './Models/Movie.php';

$list_movies = [];

$list_movies[] = new Movie('GoldeEye', 1995, 'Action', 'Years after a friend and fellow 00 agent is killed on a joint mission, a Russian crime syndicate steals a secret space-based weapons program known as "GoldenEye" and James Bond has to stop them from using it.');

$list_movies[] = new Movie('The Fast and The Furious', 2001, 'Action', "Los Angeles police officer Brian O'Conner must decide where his loyalty really lies when he becomes enamored with the street racing world he has been sent undercover to destroy.");

$list_movies[] = new Movie('Fight Club', 1999, 'Drama', "An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.");

$list_movies[] = new Movie('Inglourious Basterds', 2009, 'Adventure', "In Nazi-occupied France during World War II, a plan to assassinate Nazi leaders by a group of Jewish U.S. soldiers coincides with a theatre owner's vengeful plans for the same.");

$list_movies[0]->setRating(8.7);

$list_movies[1]->setRating('fmsfks');

$list_movies[2]->setRating(5);

foreach($list_movies as $movie){
  echo $movie->getFullInfo();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Class PHP</title>
</head>
<body>
  
</body>
</html>