<?php

//Creo la classe movie
class Movie {
    //Definisco gli attributi per l'istanza 
    public $name;
    public $director;
    public $release;
    public $genre;

    use DownloadLink;

    //Costruttore, con i vari attributi come parametro
    //Dobbiamo specificare per il genere il tipo Genre
    public function __construct($_name, $_director, $_release, Genre $_genre) {
        //Aggiorna i vari attributi con i valori che gli vengono passati dal costruttore
        $this->name = $_name;
        $this->director = $_director;
        $this->release = $_release;
        $this->genre = $_genre;
    }

    //getter che ci restituisce le info del film senza genere
    public function getInfosNoGenre() {
        return "<br> Nome: $this->name <br> Regista: $this->director <br> Anno di pubblicazione: $this->release <br>";
    }

  
}
?>
