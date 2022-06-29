<?php

class Usager {

    public $user;
    public $pass;

    public function __construct (string $user, string $pass)
    {
        $this->user = $user;
        $this->password = $pass;
    }
    
    public function __destruct ()
    {
        echo "Destruction of the user with those information: user = {$this->user}, pass = {$this->password}.<br>";
    }

    public function getUser ()
    {
        echo $this->user;
    }

    public function setUser (string $newUser)
    {
        $this->user = $newUser;
    }

    public function setPassword (string $newPassword)
    {
        $this->password = $newPassword;
    }

}

?>