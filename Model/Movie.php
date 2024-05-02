<?php 
 class Movie{
  private $title;
  public $genre;
  public $year;
  
  public function __construct(string $_title, array $_genre, int $_year)
  {
    $this->setTitle($_title);
    $this->genre = $_genre;
    $this->year = $_year;
  }

  public function setTitle($_title){
   $this->title = $_title;
  }
 }

?>