<?php

class ItemCommande{

    private Produit $produit;
    private int $quantite;
    private float $prixUnitaire;
    private float $remise; // en pourcentage : 25, 75

    function __construct(Produit $produit,int $quantite,float $prixUnitaire,float $remise){
        $this->produit =$produit;
        $this->quantite =$quantite;
        $this->prix = $prix;
        $this->remise = $remise;
    }

    public function calculerPrixTotal(){
        $prix = $this->prix*$this->quantite;
        return $prix - (prix*$this->remise/100);
    }

}

