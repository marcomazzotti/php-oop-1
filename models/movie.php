<?php

// Oggetto
class Movie
{
  public $title;
  public $year;
  public $genre;
  public $length;

  // Construct
  public function __construct($_title, $_year, $_genre, $_length)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->length = $_length;
  }

  //Metodo
  public function printInfo()
  {
    $genre = implode(", ", $this->genre);
    return "Titolo: {$this->title};<br>
            Anno: {$this->year};<br>
            Genere: {$genre};<br>
            Durata: {$this->length}";
  }
}
