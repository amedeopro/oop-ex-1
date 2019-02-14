<!-- crea e modellizza classi per gestire i prodotti di un magazzino -->

<?php

class Prodotto {

  public $nomeProdotto;
  public $brandProdotto;
  public $categoriaMerceologica;
  public $quantita;


  function __construct($categoriaMerceologica){

        $this->categoria = $categoriaMerceologica;
  }

  public function rimanenze($quantitaVendute){
    $rimanenze = $quantita-$quantitaVendute;
    return $rimanenze;
  }

}

 ?>
