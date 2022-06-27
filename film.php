<?php

class Film
{
    private string $_titre;
    private int $_dateDeSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private Genre $_genre;
    public array $_castFilmArr;

    public function __construct($titre, $dateDeSortie, $duree, Genre $genre, Realisateur $realisateur)
    {
        $this -> _titre = $titre;
        $this -> _dateDeSortie = $dateDeSortie;
        $this -> _duree = $duree;
        $this -> _genre = $genre;
        $this -> _genre -> setFilmsParGenre($this);
        $this -> _realisateur = $realisateur;
        $this -> _realisateur -> set_filmRealise($this);

        $this -> _castFilmArr = [];
    }
    
    public function get_titre()
    {
        return $this->_titre;
    }
    public function set_titre($titre)
    {
        $this->_titre = $titre;

    }
 
    public function get_dateDeSortie()
    {
        return $this->_dateDeSortie;
    }
    public function set_dateDeSortie($dateDeSortie)
    {
        $this->_dateDeSortie = $dateDeSortie;

    }
    public function get_castFilmArr() {
        return $this->_castFilmArr;
    }

    public function get_duree()
    {
        return $this->_duree;
    }
    public function set_duree($duree)
    {
        $this->_duree = $duree;
    }

    public function set_realisateur($realisateur)
    {
        $this->_realisateur = $realisateur;
    }
 
    public function set_genre($genre)
    {
        $this->_genre = $genre;
        
    }

    public function setCastFilm($film) {
        $this -> _castFilmArr[] = $film;
    }

    public function afficherCastingDeFilm() {
        $result = "<h3>Casting de film : $this </h3>
                   <ul>"; 
        foreach($this -> _castFilmArr as $cast) {
            $result .= '<li>' . $cast -> get_acteur(). ' dans le role de : "'. $cast -> get_role().'"</li>';
        }
        $result .= "</ul><hr>";

        return $result;
    }

    public function __toString()
    {
        return  $this -> _titre;
    }

}

?>