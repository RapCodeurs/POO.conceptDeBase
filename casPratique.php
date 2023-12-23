<?php

/*
Exo cas pratique : 1
Vous travaillez pour une jeune entreprise qui souhaite développer une application de gestion des employés pour une entreprise.
Dans cette application, il serait nécessaire de stocker les informations personnelles des employés, telles que leur nom, prénom et âge, dans une base de données. 
Pour cela, vous allez créer une classe nommée Personne, chacune de ces personnes ayant les attributs suivants : nom, prénom, âge. Au strict minimum, une personne est représentée par son nom et prénom.
*/

class Personne{
	public string $nom;
	public string $prenom;
	public int $age;

	public function getNom(){
		return $this->nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getAge(){
		return $this->age;
	}

	public function setPrenom(string $prenom){
		$this->prenom = $prenom;
	}

	public function setNom(string $nom){
		$this->nom = $nom;
	}

	public function setAge(int $age){
		$this->age = $age;
	}

	public function __construct(string $nom, string $prenom, int $age){
		$this->setNom($nom);
		$this->setPrenom($prenom);
        $this->setAge($age);
	}

    public function afficherInformations(){
        return($this->nom." ".$this->prenom." ".$this->age." ans");    
    }
}

/*
2
Créez une instance de cette classe et une fois cette instance créée, 
modifiez l’âge de l’utilisateur via un setter, 
puis utilisez une méthode nommée afficherInformations pour afficher le nom, prénom, âge de cette personne.
*/


$personne1 = new Personne("Paul", "Martin", 35);
$personne1->setAge(23);
echo($personne1->afficherInformations());


