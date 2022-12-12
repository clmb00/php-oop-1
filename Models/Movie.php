<?php

class Movie{
  public $title;
  public $year;
  public $genres;
  public $descr;
  public $crew;
  public $rating = '-';

  /**
   * @param String $_title The title of the movie
   * @param Number $_year The year of the releasing
   * @param Array $_genres The genre of the movie
   * @param String $_descr A little description/summary of the movie
   */
  public function __construct($_title, $_year, $_genres, Crew $_crew, $_descr = "",)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->descr = $_descr;
    $this->crew = $_crew;

    if(is_array($_genres)){
      $this->genres = $_genres;
    } else {
      $this->genres = [''];
      var_dump('Error');
    }
  }

  public function setRating($my_rating){
    if (is_numeric($my_rating) && ($my_rating >= 0 && $my_rating <= 10)){
      $this->rating = $my_rating;
    }
  }

  public function getGenreString(){
    $genres_string = $this->genres[0];
    foreach($this->genres as $key => $genre){
      if ($key){
        $genres_string .= ", $genre";
      }
    }
    return $genres_string;
  }

  public function getFullInfo(){
    return "<p><strong>Title</strong>: $this->title - <strong>Year</strong>: $this->year </p> 
            <p><strong>Summary</strong>: $this->descr </p> 
            <p><strong>Genre</strong>: " . $this->getGenreString() ."</p><p><strong>Rating</strong>: $this->rating / 10</p>";
  }

}