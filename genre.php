<?php

class Genre 
{
    private string $_nomDeGenre;
    private array $_filmsParGenre;

    public function __construct($nomDeGenre)
    {
        $this -> _nomDeGenre = $nomDeGenre;
        $this -> _filmsParGenre = [];
    }

    public function get_nomDeGenre()
    {
        return $this->_nomDeGenre;
    }
    public function set_nomDeGenre($nomDeGenre)
    {
        $this->_nomDeGenre = $nomDeGenre;
    }

    public function setFilmsParGenre(Film $films) {
        $this -> _filmsParGenre[] = $films;
    }

    public function afficherFilmsParGenre() {
        $result = "<h3>Films de genre $this : </h3>
        <ul>";
        foreach($this -> _filmsParGenre as $film) {
            $result.= " <li>$film</li>";
        }
        $result .= "</ul><hr>";

        return $result;
    }

    public function __toString()
    {
        return $this -> _nomDeGenre;
    }
}

?>