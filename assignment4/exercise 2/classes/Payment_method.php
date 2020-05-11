<?php

 abstract class Payment_method{

   
    protected $total, $price, $quantity;
     

    public function __construct($total, $price, $quantity)
    {
        $this->total = $total;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    abstract public function returnTotal();
    abstract public function returnPrice();
    abstract public function returnQuantity();
 

 }

?>