<?php 
//Explain the advantage and disadvantage of multiple inheritance.
/*  
  Advantage of inheritence:
  - can extends of more than one parent
  - can help reduce code duplication throughout your application. 
  - can help improve maintainability and the cleanliness of your code.

*/
//write PHP program to demonstrate
trait car {
    protected $name;
    public function setCarName($name){
        return $this->name = $name;
    }
    public function getCarname(){
        return $this->name;
    }
}

trait pay_tax {
    protected $tax;
    public function  setPayment($tax){
        $this->tax = $tax;

    }
    public function getPayment(){
         return $this->tax;
    }
}

class BMW {
    use car, pay_tax;
  
}

$bmw = new BMW;

$bmw->setCarName('BMW');
$bmw->setPayment(1000);
$bmw->getCarname();
$bmw->getPayment();



/*
  Disadvantage of multiple inheritence
   - Classes can be too ambiguous
   - Difficult to read / understand when classes are big and complex
   - Diamond Problem : when class B and C inherit from class A, class D inherits from class B and C
    If there is an overriden method that B and C have overridden, which one does class D inherit
*/
//For example 
/*when we both class car1 and pay_tax1 have the same method name, if we don't use keyword(insteadof) php will load an error due to 
collision with method trait method.
It's very common problem when we use multiple inheritance although triat can solve this problem by using keyword(as or insteadof)
otherwise it's still the problem when classes become larger. */
  
trait car1 {
    protected $name;
    public function set($name){
        return $this->name = $name;
    }
    public function getCarname(){
        return $this->name;
    }
}

trait pay_tax1 {
    protected $tax;
    public function  set($tax){
        $this->tax = $tax;

    }
    public function getPayment(){
         return $this->tax;
    }
}

class Camery{
    use car1, pay_tax1{
        pay_tax1::set insteadof car1;
    }
  
}

$camery = new Camery;


?>
