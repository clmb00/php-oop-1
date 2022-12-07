<?php

class Movie{
  public $title;
  public $year;
  public $genre;
  public $descr;
  public $rating = '-';

  /**
   * @param String $_title The title of the movie
   * @param Number $_year The year of the releasing
   * @param String $_title The genre of the movie
   * @param String $_title A little description/summary of the movie
   */
  public function __construct($_title, $_year, $_genre, $_descr = "")
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
    $this->descr = $_descr;
  }

  public function setRating($my_rating){
    if (is_numeric($my_rating) && ($my_rating >= 0 && $my_rating <= 10)){
      $this->rating = $my_rating;
    }
  }

  public function getFullInfo(){
    return "<p><strong>Title</strong>: $this->title - <strong>Year</strong>: $this->year: </p> 
            <p><strong>Summary</strong>: $this->descr </p> 
            <p><strong>Genre</strong>: $this->genre <strong>Rating</strong>: $this->rating / 10</p><hr>";
  }

}