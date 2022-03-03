<?php 
class Book{
    public $price;
    public $title;
    public function __construct($title,$price){
        $this -> title = $title;
        $this -> price = $price;
        echo '<br> the class"',__CLASS__,'" is initiated <br>';
    }
    public function __destruct(){
        echo '<br> the class"',__CLASS__,'" was destructed <br>'; 
    }
    public function __toString(){
        return $this -> getTitle();
    }
    public function setTitle($title){
       $this -> title = $title;

    }
    public function getTitle(){
        return $this -> title;
    }
    public function setPrice($Price){
        $this -> price = $price;
 
     }
     public function getPrice(){
         return $this -> price;
     }
}