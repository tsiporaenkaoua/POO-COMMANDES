<?php

include_once 'src/Class/Paiement/Paiement.php';

class CarteBanquaire implements Paiement{
    public function payer(float $prix) : void{
        echo "Paiement de $prix € effectué avec succès par carte banquaire.";
    }
}