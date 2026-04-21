<?php
class Compte 
{
    private $solde;
    public function __construct($solde = 0) {
        $this->solde = $solde;
    }
    public function deposer($montant) {
        $this->solde += $montant;
    }
    public function retirer($montant) {
        $this->solde -= $montant;
    }
    public function getSolde() {
        return $this->solde;
    }
}

class CompteAcheter extends Compte 
{
    private $taux;
    public function __construct($solde, $taux) 
    {
        parent::__construct($solde);
        $this->taux = $taux;
    }
    public function calculerInteret() 
    {
        return $this->getSolde() * $this->taux;
    }
}

$compte = new CompteAcheter(1000, 0.05);
echo "Solde : " . $compte->getSolde() . " DH<br>";
echo "Taux : 5%<br>";
echo "Intérêt : " . $compte->calculerInteret() . " DH<br>";
?>