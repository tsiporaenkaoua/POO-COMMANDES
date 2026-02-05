<?php

include_once 'src/Class/Produit/Produit.php';
include_once 'src/Class/Commande/Commande.php';
include_once 'src/Class/Paiement/GestionPaiement.php';
include_once 'src/Class/Paiement/Paypal.php';

$produit1 = new Produit("parfum",65, 25);
$produit2 = new Produit("rouge à levre",15, 72);

//print_r($produit2);

$commande = new Commande();

$commande->addItem($produit1);
$commande->addItem($produit2);

//print_r($commande);
//echo($commande->montantTotal());

//$commande->setStatutPaye();
//echo($commande->getStatut());
//print_r($commande->getProduits());

$paiememt = new GestionPaiement();
$paiememt->payer($commande, new Paypal());
echo "<br>Statut : " . $commande->getStatut();

