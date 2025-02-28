<?php
class Movie {
    public $name;
    public $director;
    public $release;
    public $genre;

    
    public function __construct($_name, $_director, $_release, Genre $_genre) {
        $this->name = $_name;
        $this->director = $_director;
        $this->release = $_release;
        $this->genre = $_genre;
    }

    public function getInfosNoGenre() {
        return "<br> Nome: $this->name <br> Regista: $this->director <br> Anno di pubblicazione: $this->release <br>";
    }

    public function getGenre() {
        return "Il genere è: " . $this->genre->getGenre();
    }
}
?>
