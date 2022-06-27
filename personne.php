<?php

// parent class of Acteur and Realisateur

class Personne 
{
    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected DateTime $_dateDeNaissance;


    public function __construct($nom, $prenom, $sexe, $dateDeNaissance)
    {
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _sexe = $sexe;
        $this -> _dateDeNaissance = new DateTime($dateDeNaissance);
    }

    public function get_nom()
    {
        return $this->_nom;
    }
    public function set_nom($nom)
    {
        $this->_nom = $nom;
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }
    public function set_prenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function get_sexe()
    {
        return $this->_sexe;
    } 
    public function set_sexe($sexe)
    {
        $this->_sexe = $sexe;
    }

    public function get_dateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }
    public function set_dateDeNaissance($dateDeNaissance)
    {
        $this->_dateDeNaissance = $dateDeNaissance;

    }

    
}

?>