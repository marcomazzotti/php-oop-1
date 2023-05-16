<?php

require __DIR__ . "/models/movie.php";

$movies = array(
  new Movie("Avatar", "2009", ["fantascienza", "azione", "avventura"], "162 min"),
  new Movie("Avatar - La via dell'acqua", "2022", ["fantascienza", "azione", "avventura"], "192 min"),
  new Movie("Iron Man", "2008", ["fantascienza", "azione"], "126 min"),
  new Movie("L'incredibile Hulk", "2008", ["fantascienza", "azione"], "112 min"),
  new Movie("Iron Man 2", "2010", ["fantascienza", "azione"], "125 min")
);
