<?php

class Voiture {
    public string $modele;
    public string $marque;
    public int $vitesse = 0;
    public int $porte;

    public function accelerer(int $vitesse){
        $this->vitesse += $vitesse;
    }

    public static function marqueEtModele(string $marque, string $modele){
        $instance = new self();
        $instance->marque = $marque;
        $instance->modele = $modele;
        return $instance;
    }

    public function __construct(){
        
    }

}

// $voiture1 = new Voiture();
// $voiture2 = new Voiture("V5", "Peugeaut", 80, 4);
// $voiture3 = new Voiture("V10", "Audi", 90, 2);
// $voiture4 = new Voiture("V1", "BMW", 120, 3);


// echo($voiture1->porte= 4)."<br>";
// echo($voiture1->vitesse= 54)."<br>";
// echo($voiture1->modele= "Peugeaut")."<br>";
// echo($voiture1->marque= "Mercedes")."<br>";

// $voiture1 = Voiture::marqueEtModele("Mercedes", "GL450");
// $voiture1->accelerer(253);
// echo($voiture1->vitesse);
// print_r($voiture1);



