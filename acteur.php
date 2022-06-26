<?php

class Acteur extends Personne
{
    private array $_castActeurArr;

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

    public function __toString()
    {  
        return $this -> _prenom . " " . $this -> _nom;

        // $format = $this -> _dateDeNaissance;
        // $born = ($this-> _sexe == "H") ? "né" : "née";
        // return $this -> _prenom . " " . $this -> _nom . " $born le ". $format -> format("d/m/Y");
    }



}


    // public function addFilmToActor(Film $filmJoue)
    // {
    //     $this->_filmJoue[] = $filmJoue;
    // }
    
    // public function addRoleToActor(Role $roleJoue)
    // {
    //     $this->_roleJoue[] = $roleJoue;
    // }

    // public function afficherFilmographie() {
    //     $result = "<h3> $this a joué dans les films: </h3><ul>";
    //     foreach($this->_filmJoue as $film) {
    //         $result .= "<li>$film</li>";
    //     }

    //     $result .= "</ul>";

    //     return $result;
    // }
?>