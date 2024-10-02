<?php

class Prodotto{

// proprietà
    public $marca;
    public $nome;
    public $tipologia;
    public $sconto;

//costruttore
    public function __construct($_marca, $_nome, $_tipologia, $_sconto){

        $this->marca = $_marca;
        $this->nome = $_nome;
        $this->tipologia = $_tipologia;
        $this->sconto = $_sconto;
    }

//Metodo per definire il prodotto
    public function show_prodotto(){

        echo "Marca: {$this->marca} <br>";
        echo "Nome: {$this->nome} <br>" ;
        echo "Tipologia: {$this->tipologia} <br>";
        echo "Sconto: {$this->sconto} <br>";
    }

//Metodo per calcolare lo sconto
    public function calcolaSconto($Prodotto){
    $sconto = $Prodotto->prezzo * $Prodotto->sconto / 100;
    $prezzoScontato = $Prodotto->prezzo -  $sconto;
    return  number_format($prezzoScontato,2, ",",".");
  }

//Metodo per verificare la disponibilità
    public function disponibilita($_quantita){
        if($this->$_quantita <=0){
            return "Prodotto non disponibile";
        } else{
            return "prodotto disponibile";
        }
    }
}
