<?php 

class MyClass {

    public $methods = [];

    //public function __construct($nome) {
    //    $this->var = $var;
    //}

    public function addMethods($method) {
        $this->methods[] = $method;
    }

    public function getMethods() {
        return  $this->methods;
    }
}