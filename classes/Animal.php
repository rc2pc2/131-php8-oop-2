<?php 

class Animal{
    public static $type = "Animal";
    public $species;
    public $habitat;
    public $weight;
    public $imageUrl;

    public function __construct(string $species, string $habitat, float $weight, string $imageUrl){
        $this->species = $species;
        $this->habitat = $habitat;
        $this->weight = $weight;
        $this->imageUrl = $imageUrl;
    }

    public function eat(){
        // return $this->species . " is eating...";
        return "$this->species is eating...";
    }

    public function breathe(){
        return "$this->species is breathing...";
    }

    public function makeSound(){
        return "$this->species is making a sound...";
    }
}