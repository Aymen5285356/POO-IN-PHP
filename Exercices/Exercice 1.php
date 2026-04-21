<?php
class Animal 
{
    private $nom;
    public function __construct($nom) 
    {
        $this->nom = $nom;
    }
    public function getNom() 
    {
        return $this->nom;
    }
    public function setNom($nom) 
    {
        $this->nom = $nom;
    }
    public function parler() 
    {
        echo "Je suis un animal et je m'appelle " . $this->nom . ".";
    }
}

$animal = new Animal("Lenda");
$animal->parler();
?>