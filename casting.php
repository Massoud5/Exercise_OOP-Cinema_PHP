<?php

class Casting
{
    private Film $_film;
    private Acteur $_acteur;
    private Role $_role;

    public function __construct(Film $film, Acteur $acteur , Role $role)
    {
       $this -> _film = $film; 
       $this -> _film -> setCastFilm($film); 
       $this -> _acteur = $acteur;
       $this -> _acteur -> setCastActeur($acteur); 
       $this -> _role = $role;
       $this -> _role -> setCastRole($role); 
    }
    
    public function __toString() {
        return "Dans " . $this -> _film . ", " .  $this -> _role . " a été incarné par " . $this -> _acteur . ",<hr>";
    }
}
?>