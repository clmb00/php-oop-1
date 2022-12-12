<?php

class Crew{
  public $director;
  public $writer;
  public $cast;

  /**
   * @param String $_director Director of the movie
   * @param String $_writer Writer of the movie
   * @param Array $_cast Cast of the movie
   */
  public function __construct($_director, $_writer, Array $_cast)
  {
    $this->director = $_director;
    $this->writer = $_writer;
    
    if(is_array($_cast)){
      $this->cast = $_cast;
    } else {
      $this->cast = [''];
      var_dump('Error');
    }
  }

  public function getFullCrew(){
    return "<p><strong>Director: </strong>$this->director</p>
            <p><strong>Writer: </strong>$this->writer</p>";
  }
}