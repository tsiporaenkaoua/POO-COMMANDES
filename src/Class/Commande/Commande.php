<?php
class Commande{ //responsabilité gerer l'etat de la commande

    //private $id;
    private array $items = [];
    private float $montant_total;
    private string $statut = "CREE"; // FAIRE UNE ENUM

   public function addItem(Produit $produit){
    $this->items[] = $produit;
   }

   public function montantTotal(){
        $montant = 0;
        foreach($this->items as $item){
            $montant += $item->getPrice();
        }
        return $montant;
   }

    public function getStatut(){
        return $this->status;
    }

    public function setStatutPaye(){
        return $this->status = "PAYE";
    }

    public function getProduits(){
       return $this->items;
    }
}
