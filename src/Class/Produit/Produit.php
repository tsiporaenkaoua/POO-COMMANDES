<?php

Class Produit{

    //private $id;
    private string $name;
    private float $price;
    private int $stock;

    public function __construct(string $name,float $price,int $stock){
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getStock(){
        return $this->stock;
    }

    public function changePrice($price){
        $this->price = $price;
    }

    public function isAvailable($quantite){
      return $this->stock >= $quantite;
    }

    public  function reduceStock($quantite) :void{
       if($this->isAvailable($quantite)){
          $this->stock -= $quantite;
       } else {
          throw new Exception("Stock insuffisant");
       }    
    }

    
} 