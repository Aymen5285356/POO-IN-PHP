<?php
class Voiture 
{
    public $marque;
    public function __construct($marque) 
    {
        $this->marque = $marque;
    }
}

$voiture = new Voiture("Toyota");
echo "Marque de la voiture : " . $voiture->marque;
?>