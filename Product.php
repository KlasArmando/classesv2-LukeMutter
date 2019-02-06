<?php
class Product{

    public $Naam;
    public $Prijs;

    public function __construct($Naam, $Prijs)
    {
        $this->Naam = $Naam;
        $this->Prijs = $Prijs;
    }
}
$Product1 = new Product("AirPods", 150);

var_dump($Product1);

class Klant{

    public $Naam;
    public $Leeftijd;
    public $Klantnummer;

    public function __construct($Naam, $Leeftijd, $Klantnummer)
    {
        $this->Naam = $Naam;
        $this->Leeftijd = $Leeftijd;
        $this->Klantnummer = $Klantnummer;
    }
}
$Klant1 = new Klant("Luke",17, 1 );

var_dump($Klant1);