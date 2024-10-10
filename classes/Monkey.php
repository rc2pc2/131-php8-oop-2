<?php 
require_once __DIR__ . '/Animal.php';

class Monkey extends Animal{
    // ! questa classe ha ereditato automaticamente dall'extends TUTTE LE VARIABILI DI ISTANZA E I METODI DELLA CLASSE ESTESA    
    public bool $prehensileTail; // coda
    public $pack; // branco dei leoni

    public function __construct(string $habitat, float $weight, string $imageUrl, bool $prehensileTail, string $pack){
        // $this->species = "Macaca mulatta";
        parent::__construct("Macaca mulatta", $habitat, $weight, $imageUrl);
        $this->prehensileTail = $prehensileTail;
        $this->pack = $pack;
    }

    public function hangs(){
        return "$this->species is grapping from a tree...";
    }

    // % sovrascrivere un metodo esistente nel parent e modificarne il comportamento
    // ! si dice OVERRIDE
    public function eat(){
        return "This monkey is eating with its hands";
        // esempio di override con uso del metodo del parent return parent::eat(). " and this lion is eating and roaring...";
    }
}