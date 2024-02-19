<?php

require_once "./src/MyClass.php";


use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase{

    private readonly MyClass $MyClass;

    public function setup(): void {
        $this->MyClass = new MyClass;
    }

    //1.Adicionar Métodos (testAddMethods):

    

}