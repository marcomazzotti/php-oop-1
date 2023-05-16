<?php

// Oggetto
class Movie
{
  public $title;
  public $year;
  public $genre;

  // Construct
  public function __construct($_title, $_year, $_genre)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
  }

  //Metodo
  public function printInfo()
  {
    $genre = implode(", ", $this->genre);
    return "Titolo: {$this->title};<br>
            Anno: {$this->year};<br>
            Genere: {$genre};<br>";
  }
}

$first_movie = new Movie("Avatar", "2009", ["fantascienza", "azione", "avventura"]);
$second_movie = new Movie("Avatar - La via dell'acqua", "2022", ["fantascienza", "azione", "avventura"]);

echo ($first_movie->printInfo());
echo ("<br>");
echo ($second_movie->printInfo());
