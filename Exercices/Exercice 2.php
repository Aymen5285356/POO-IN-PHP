<?php
class Livre 
{
    private $titre;
    public function __construct($titre) 
    {
        $this->titre = $titre;
    }

    public function afficherTitre() 
    {
        echo $this->titre;
    }
}

$livre = new Livre("titre de livre: Antigone");
$livre->afficherTitre();
?>