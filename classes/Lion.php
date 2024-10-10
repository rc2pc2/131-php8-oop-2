<?php 
require_once __DIR__ . '/Animal.php';

class Lion extends Animal{
    // ! questa classe ha ereditato automaticamente dall'extends TUTTE LE VARIABILI DI ISTANZA E I METODI DELLA CLASSE ESTESA    
    public $mane; // criniera
    public $pride; // branco dei leoni

    public function __construct(string $habitat, float $weight, string $imageUrl, string $mane, string $pride){
        // $this->species = "Panthera Leo";
        parent::__construct("Panthera Leo", $habitat, $weight, $imageUrl);
        $this->mane = $mane;
        $this->pride = $pride;
    }

    public function hunt(){
        return "$this->species is hunting like a lion...";
    }

    // % sovrascrivere un metodo esistente nel parent e modificarne il comportamento
    // ! si dice OVERRIDE
    public function eat(){
        return "This lion is eating and roaring...";
        // esempio di override con uso del metodo del parent return parent::eat(). " and this lion is eating and roaring...";
    }
}