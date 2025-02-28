<?php 
class Movie {
    public $name;
    public $director;
    public $genre;
    public $release;

    public function __construct($_name, $_director, $_genre, $_release){
        $this->name=$_name;
        $this->director=$_director;
        $this->genre=$_genre;
        $this->release=$_release;

    }

    public function getInfos() {
        return "<br> Nome: $this->name <br> Regista: $this->director <br> Genere: $this->genre <br> Anno di pubblicazione: $this->release <br>";
    }

    public function getName() {
        return $this->name;
    }



}

?>