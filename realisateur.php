<?php

class Realisateur extends Personne
{
    private array $_filmRealise;

    public function __construct($nom, $prenom, $sexe, $dateDeNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
        $this -> _filmRealise = [];
    }

    public function set_filmRealise($_filmRealise)
    {
        $this->_filmRealise[] = $_filmRealise;
    }

    public function afficherFilmRealise(){
            $result = "<h3>Films réalisés par " . $this -> _prenom . " " . $this -> _nom . ": </h3>
                        <ul>";
        foreach($this -> _filmRealise as $film) {
            $result.= " <li>$film</li>";
        }
            $result .= "</ul>";

        return $result;
    }
 
    public function __toString()
    {
        $format = $this -> _dateDeNaissance;

        $born = ($this-> _sexe == "H") ? "né" : "née";
        return $this -> _prenom . " " . $this -> _nom . " $born le ". $format -> format("d/m/Y");
    }
}

?>