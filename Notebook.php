<?php
include_once __DIR__.'/Prodotti.php';

//Proprietà
class Notebook extends Prodotto{
    public $colore;
    public $prezzo;
    public $quantita;

//Costruttore
    public function __construct($_marca, $_nome, $_tipologia, $_sconto, $_colore, $_quantita, $_prezzo){
        parent::__construct($_marca, $_nome, $_tipologia, $_sconto);
        $this->colore = $_colore;
        $this->prezzo = $_prezzo;
        $this->quantita =$_quantita;
    }

}