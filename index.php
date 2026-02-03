<?php

include_once 'src/Class/Produit/Produit.php';

$produit1 = new Produit("parfum",65, 25);
$produit2 = new Produit("rouge à levre",15, 72);

//print_r ($produit2);

$commande = new Commande();