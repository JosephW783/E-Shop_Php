<?php
include_once __DIR__.'/Prodotti.php';

//proprietà
class Smartphone extends Prodotto{
    public $colore;
    public $quantita;
    public $prezzo;

//Costruttore
    public function __construct($_marca, $_nome, $_tipologia, $_sconto, $_colore, $_quantita, $_prezzo){
        parent::__construct($_marca, $_nome, $_tipologia, $_sconto);
        $this->colore = $_colore;
        $this->quantita = $_quantita;
        $this->prezzo = $_prezzo;
    }
}
