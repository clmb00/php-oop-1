<?php

include_once './Models/Movie.php';
include_once './Models/Crew.php';

$list_movies = [];

$list_movies[] = new Movie(
  'GoldeEye', 
  1995, 
  ['Action', 'Adventure', 'Thriller'], 
  new Crew('Martin Campbell', 'Ian Fleming', ['Pierce Brosnan', 'Sean Bean', 'Izabella Scorupco']), 
  'Years after a friend and fellow 00 agent is killed on a joint mission, a Russian crime syndicate steals a secret space-based weapons program known as "GoldenEye" and James Bond has to stop them from using it.'
);

$list_movies[] = new Movie('The Fast and The Furious', 2001, ['Action', 'Crime', 'Thriller'], new Crew('Rob Cohen', 'Ken Li', ['Vin Diesel', 'Paul Walker', 'Michelle Rodriguez']), "Los Angeles police officer Brian O'Conner must decide where his loyalty really lies when he becomes enamored with the street racing world he has been sent undercover to destroy.");

$list_movies[] = new Movie('Fight Club', 1999, ['Drama'], new Crew('David Fincher', 'Chuck Palahniuk', ['Brad Pitt', 'Meat Loaf']), "An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.");

$list_movies[] = new Movie('Inglourious Basterds', 2009, ['Adventure', 'Drama', 'War'], new Crew('Quentin Tarantino', 'Quentin Tarantino', ['Brad Pitt', 'Mélanie Laurent']), "In Nazi-occupied France during World War II, a plan to assassinate Nazi leaders by a group of Jewish U.S. soldiers coincides with a theatre owner's vengeful plans for the same.");

if(!empty($_POST)){
  var_dump($_POST);
  var_dump(key($_POST));
  $list_movies[key($_POST)]->setRating($_POST[key($_POST)]);
}

?>