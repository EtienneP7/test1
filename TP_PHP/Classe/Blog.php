<?php

class Blog {

    public $titre;
    public $texte;

    public function __construct (string $titre, string $texte)
    {
        $this->titre = $titre;
        $this->texte = $texte;
    }
    
    public function __destruct ()
    {
        echo "Destruction of the blog with this title: {$this->titre}.<br>";
    }

    public function setBlog ($pdo)
    {
        $titre = $this->titre;
        $texte = $this->texte;

        $sql = "INSERT INTO blog (titre, texte) VALUES(?, ?)";

        $query = $pdo->prepare($sql);
        $query->execute(array($titre, $texte));
    }

    public function getTitre ()
    {
        echo $this->titre;
    }

    public function getTexte ()
    {
        echo $this->texte;
    }

    public function setTitre (string $newtitre)
    {
        $this->titre = $newtitre;
    }

    public function setTexte (string $newTexte)
    {
        $this->texte = $newTexte;
    }

}

?>