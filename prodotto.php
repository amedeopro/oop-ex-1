<!-- crea e modellizza classi per gestire i prodotti di un magazzino -->

<?php

class Prodotto {

  public $nomeProdotto;
  public $brandProdotto;
  public $categoriaMerceologica;
  public $quantita;
  public $quantitaVendute;


  function __construct($categoriaMerceologica){

        $this->categoria = $categoriaMerceologica;
  }

  public function rimanenze(){
    $rimanenze = $this->quantita - $this->quantitaVendute;
    return $rimanenze;
  }

}

 ?>
