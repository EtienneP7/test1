<?php

class Commentaire {

    public $texte;

    public function __construct (string $texte)
    {
        $this->texte = $texte;
    }
    
    public function __destruct ()
    {
        echo "Destruction of this comment : {$this->texte}<br>";
    }

    public function getComment ()
    {
        echo $this->texte;
    }

    public function setComment (string $newComment)
    {
        $this->texte = $newComment;
    }
    

}

?>