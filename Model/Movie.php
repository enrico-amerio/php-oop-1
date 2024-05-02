<?php 
 class Movie{
  private $title;
  public $genres;
  public $year;
  
  public function __construct(string $_title, array $_genres, int $_year)
  {
    $this->setTitle($_title);
    $this->genres = $_genres;
    $this->year = $_year;
  }

  public function setTitle($_title){
   $this->title = $_title;
  }
  public function getTitle(){
    return $this->title;
  }
 }

?>