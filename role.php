<?php

class Role
{
    private string $_role;
    private array $_castRoleArr;

    public function __construct($role) {
        $this -> _role = $role;
        $this -> _castRoleArr = [];
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function setRole($role)
    {
        $this->_role = $role;
    }

    public function setCastRole($role) {
        $this -> _castRoleArr[] = $role;
    }

    public function afficherActeursDeRole() {
        $result = "<h3>Le role de \"$this\" a été incarné par: </h3>
                    <ul>";
        foreach($this -> _castRoleArr as $actor) {
            $result .= "<li>$actor</li>";
        }
    
        $result .= "</ul><hr>";
    
        return $result;
    }

    public function __toString()
    {
        return $this -> _role ;
    }
}

?>