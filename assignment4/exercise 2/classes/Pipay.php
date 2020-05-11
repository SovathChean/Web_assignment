<?php 

require_once(__DIR__ . '/Payment_method.php');

 class Pipay extends Payment_method {

    public function returnTotal(){
        return $this->total;
    }
    public function returnPrice(){
       return $this->price;
   }
   public function returnQuantity()
   {
       return $this->quantity;
   }

 }

?>