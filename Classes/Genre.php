<?php
//Creo la classe Genre
//Voglio che il genere sia un oggetto a se stante
class Genre {
    public $genres;

    //Costruttore per i generi, NB "array $_genres"
    public function __construct(array $_genres) {
        $this->genres = $_genres;
    }

    //getter che restituisce il genere 
    public function getGenre() {
        return implode(", ", $this->genres);
    }
}
?>
