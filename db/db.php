<?php 
require_once "./Classes/Movie.php";
require_once "./Classes/Genre.php";

$genre1 = new Genre(["Comico"]);
$genre2 = new Genre(["Thriller", "Mystery"]);

$movies = [
    new Movie("Natale in india", "Neri Parenti", 2003, $genre1),
    new Movie("Shutter Island", "Martin Scorsese", 2010, $genre2)
];

?>