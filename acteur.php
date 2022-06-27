<?php

class Acteur extends Personne
{
    private array $_castActeurArr;
    private array $_filmJoue;

    public function __construct($nom, $prenom, $sexe, $dateDeNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
        $this -> _castActeurArr= [];

    }
    
    public function setCastActeur($acteur) {
        $this -> _castActeurArr[] = $acteur;
    }

    public function getCastActeurArr()
    {
        return $this->_castActeurArr;
    }

    public function afficherFilmographie() {
        $result = "<h3> $this a joué dans les films: </h3><ul>";
        foreach($this -> _castActeurArr as $cast) {
            $result .= '<li><strong>' . $cast -> get_film(). '</strong> dans le role de : "'. $cast -> get_role().'"</li>';
        }
    
        $result .= "</ul><hr>";
    
        return $result;
    }

    public function __toString()
    {  
        return $this -> _prenom . " " . $this -> _nom;

        // $format = $this -> _dateDeNaissance;   
        // $born = ($this-> _sexe == "H") ? "né" : "née";
        // return $this -> _prenom . " " . $this -> _nom . " $born le ". $format -> format("d/m/Y");
    }

}

?>