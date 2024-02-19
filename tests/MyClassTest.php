<?php

require_once "./src/MyClass.php";


use PHPUnit\Framework\TestCase;


class MyClassTest extends TestCase{

    private $mock1;
    private $mock2;

    public function setup(): void {
        $this->mock1 = $this->createMock(MyClass::class);
        $this->mock2 = $this->getMockBuilder(MyClass::class);
    }

    public function testAddMethods() {
        $mock = $this->mock2->addMethods(["method1", "method2"])
                            ->disableOriginalConstructor()
                            ->getMock();   

        $mock->method("method1")
             ->willReturn(1);
        $mock->method("method2")
             ->willReturn(2);

        $this->assertEquals(1, $mock->method1());
        $this->assertEquals(2, $mock->method2());
    }


    public function testSetConstructorArgs() {
        $mock = $this->mock2->setConstructorArgs(["arg1", 10, 1])
                            ->getMock();
        
        $this->assertEquals("arg1", $mock->name);
        $this->assertEquals(10, $mock->price);
        $this->assertEquals(1, $mock->quantity);
    }

    public function testSetMockClassName() {
        $mock = $this->mock2->setMockClassName("MyClass2")
                            ->disableOriginalConstructor()
                            ->getMock();

        $this->assertEquals("MyClass2", get_class($mock));
    }

    public function testDisableOriginalConstructor() {
        $mock = $this->mock2->disableOriginalConstructor()
                            ->getMock();
        
        $this->assertEmpty($mock->__construct("a", "b", "c"));
    }

    public function testDisableOriginalClone() {
        $mock = $this->mock2->disableOriginalConstructor()
                            ->disableOriginalClone()
                            ->getMock();
        
        $this->assertEmpty($mock->__clone());
    }

    public function testDisableAutoload() {

    }

    public function testMethodWillReturn() {
        $mock = $this->mock1;

        $mock->method("getName")
             ->willReturn(1);
        
        $this->assertEquals(1, $mock->getName());
    }

    public function testMethodReturnSelf() {
        $mock = $this->mock1;

        $mock->method("getName")
             ->willReturnSelf();
  
        $this->assertSame($mock, $mock->getName());
    }

}