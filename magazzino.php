<?php require 'prodotto.php'; ?>

 <?php $cartaA4 = new Prodotto("cartolibreria")  ?>
 <?php
 $cartaA4->nomeProdotto = "Carta A4";
 $cartaA4->brandProdotto = "Pigna";
 $cartaA4->quantita = 100;
 $cartaA4->quantitaVendute = 80;
  ?>


 <div class="prodotto">
   <h1><?php echo $cartaA4->categoria; ?></h1>
   <ul>
     <li>Nome Prodotto: <?php echo $cartaA4->nomeProdotto; ?></li>
     <li>Marca: <?php echo $cartaA4->brandProdotto; ?></li>
     <li>Quantita acquistata: <?php echo $cartaA4->quantita; ?></li>
     <li>Quantita rimanente: <?php echo $cartaA4->rimanenze(); ?></li>
   </ul>
 </div>


 <?php $dixan = new Prodotto("casalinghi")  ?>
 <?php
 $dixan->nomeProdotto = "Dixan Piatti";
 $dixan->brandProdotto = "Henkel";
 $dixan->quantita = 135;
 $dixan->quantitaVendute = 36;
  ?>


 <div class="prodotto">
   <h1><?php echo $dixan->categoria; ?></h1>
   <ul>
     <li>Nome Prodotto: <?php echo $dixan->nomeProdotto; ?></li>
     <li>Marca: <?php echo $dixan->brandProdotto; ?></li>
     <li>Quantita acquistata: <?php echo $dixan->quantita; ?></li>
     <li>Quantita rimanente: <?php echo $dixan->rimanenze(); ?></li>
   </ul>
 </div>
