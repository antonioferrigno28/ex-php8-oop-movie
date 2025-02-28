<?php
class Genre {
    public $genres;

    public function __construct(array $_genres) {
        $this->genres = $_genres;
    }

    public function getGenre() {
        return implode(", ", $this->genres);
    }
}
?>
