<?php

 class GestionPaiement{

    public function payer(Commande $commande, Paiement $methodePaiement)
    {
        $montant = $commande->montantTotal();

        $methodePaiement->payer($montant);

        $commande->setStatutPaye();

    }
}

    
