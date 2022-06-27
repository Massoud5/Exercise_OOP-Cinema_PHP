<?php

class Casting
{
    private Film $_film;
    private Acteur $_acteur;
    private Role $_role;

    public function __construct(Film $film, Acteur $acteur , Role $role)
    {
       $this -> _film = $film; 
       $this -> _film -> setCastFilm($this); // to send the castings new objects completely in the film class
       $this -> _acteur = $acteur;
       $this -> _acteur -> setCastActeur($this); // to send the castings new objects completely in the acteur class
       $this -> _role = $role;
       $this -> _role -> setCastRole($this); // to send the castings new objects completely in the role class
    }
    
    
    public function get_film()
    {
        return $this->_film;
    }
    
    public function set_film($_film)
    {
        $this->_film = $_film;
        
    }

    public function get_acteur()
    {
        return $this->_acteur;
    }
    
    public function set_acteur($_acteur)
    {
        $this->_acteur = $_acteur;
    }
    
    public function get_role()
    {
        return $this->_role;
    }
    
    public function set_role($_role)
    {
        $this->_role = $_role;
    }

    public function __toString() {
        return "Dans " . $this -> _film . ", " .  $this -> _role . " a été incarné par " . $this -> _acteur . "";
    }
}
?>