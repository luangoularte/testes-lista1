<?php

require_once "./src/MyClass.php";


use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase{

    private readonly MyClass $MyClass;

    public function setup(): void {
        $this->MyClass = new MyClass;
    }

    //1.Adicionar Métodos (testAddMethods):

    public function testAddMethods() {
        $this->MyClass->addMethods("getId");
        $this->MyClass->addMethods("setId");
        $resultado = $this->MyClass->getMethods();

        $this->assertEquals(["getId", "setId"], $resultado);
    }

    

}
