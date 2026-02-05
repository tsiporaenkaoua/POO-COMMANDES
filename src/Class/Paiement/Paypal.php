<?php
include_once 'src/Class/Paiement/Paiement.php';

class Paypal implements Paiement{
    public function payer(float $prix) : void{
        echo "Paiement de $prix € effectué avec succès par paypal.";
    }
}