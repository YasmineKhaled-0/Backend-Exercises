<?php
class valuesA {
   private $_sort;
   public function __construct(array $sort){
      $this-> _sort = $sort;
  }
   public function arsort(){
     $sorted = $this->_sort;
     sort($sorted);
      return $sorted;
   }
}
$numbers = new valuesA(array(11, -2, 4, 35, 0, 8, -9));
print_r($numbers->arsort())."\n </br>";
?>