<?php

require_once "./src/MinhaClasseAvancada.php";

use PHPUnit\Framework\TestCase;

class MinhaClasseAvancadoTest extends TestCase {

    private readonly MinhaClasseAvancada $MinhaClasseAvancada;

    public function setup(): void {
        $this->MinhaClasseAvancada = new MinhaClasseAvancada;
    }


    //somar($a, $b): retorna a soma de dois valores passados como parâmetro

    public function testSomarDecimais() {
        $resultado = $this->MinhaClasseAvancada->somar(1.27, 5.49);

        $this->assertEquals(6.76, $resultado);
    }

    public function testSomaCorreta() {
        $resultado = $this->MinhaClasseAvancada->somar(123, 542);

        $this->assertEquals(665, $resultado);
    }

    public function testSomaComArgumentosInvalidos() {
        $resultado = $this->MinhaClasseAvancada->somar("um", "dois");

        $this->assertEquals(3, $resultado);
    }

    public function testSomaComZero() {
        $resultado = $this->MinhaClasseAvancada->somar(0, 5);

        $this->assertEquals(5, $resultado);
    }

    //subtrair($a, $b): retorna a subtração entre dois valores passados como parâmetro

    public function testSubtrairDecimais() {
        $resultado = $this->MinhaClasseAvancada->subtrair(10.54, 5.49);

        $this->assertEquals(5.05, $resultado);
    }

    public function testSubtrairCorreta() {
        $resultado = $this->MinhaClasseAvancada->subtrair(43, 20);

        $this->assertEquals(23, $resultado);
    }

    public function testSubtrairComArgumentosInvalidos() {
        $resultado = $this->MinhaClasseAvancada->subtrair("cinco", "quatro");

        $this->assertEquals(1, $resultado);
    }

    public function testSubtrairComZero() {
        $resultado = $this->MinhaClasseAvancada->subtrair(5, 0);

        $this->assertEquals(5, $resultado);
    }
}

