<?php
class calculatorprocesses{
    protected $_xvalue,$_yvalue;
    public function __construct($xvalue , $yvalue){
        $this-> _xvalue = $xvalue;
        $this-> _yvalue = $yvalue;
    }
public function divide(){
    return $this->_xvalue / $this ->_yvalue;
}
public function sum(){
    return $this->_xvalue + $this->_yvalue;
}
public function subtract(){
    return $this->_xvalue - $this->_yvalue;
}
public function multiply(){
    return $this->_xvalue * $this->_yvalue;
}
}
$calc= new calculatorprocesses(60, 12);
echo $calc-> divide()."\n </br>"; 
echo $calc-> sum()."\n </br>";
echo $calc-> subtract()."\n </br>";
echo $calc-> multiply()."\n </br>";
?>