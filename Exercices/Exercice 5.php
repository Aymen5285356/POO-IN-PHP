<?php
class Produit 
{
    private $nom;
    private $prix;
    public function __construct($nom, $prix) 
    {
        $this->nom = $nom;
        $this->prix = $prix;
    }
    public function getNom() 
    {
        return $this->nom;
    }
    public function getPrix() 
    {
        return $this->prix;
    }
    public function setNom($nom) 
    {
        $this->nom = $nom;
    }
    public function setPrix($prix) 
    {
        $this->prix = $prix;
    } 
    public function toString() 
    {
        return "Produit : " . $this->nom . " | Prix : " . $this->prix . " DH";
    }
}

class Panier 
{
    private $produits;
    public function __construct() 
    {
        $this->produits = array();
    }
    public function ajouterProduit($produit) 
    {
        $this->produits[] = $produit;
    }
    public function total() {
        $somme = 0;
        foreach ($this->produits as $produit) 
        {
            $somme += $produit->getPrix();
        }
        return $somme;
    }
    public function toString() {
        $result = "Contenu du panier : <br>";
        foreach ($this->produits as $produit) 
        {
            $result .= $produit->toString() . "<br>";
        }
        $result .= "Total : " . $this->total() . " DH";
        return $result;
    }
}

$p1 = new Produit("Ordinateur", 5000);
$p2 = new Produit("Souris", 100);
$p3 = new Produit("Clavier", 250);
$panier = new Panier();
$panier->ajouterProduit($p1);
$panier->ajouterProduit($p2);
$panier->ajouterProduit($p3);
echo $panier->toString();
?>