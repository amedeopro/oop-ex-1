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
