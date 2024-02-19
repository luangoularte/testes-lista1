<?php


require_once "./src/ListaNumerica.php";

use PHPUnit\Framework\TestCase;

class ListaNumericaTest extends TestCase{

    private readonly ListaNumerica $ListaNumerica;

    public function setup(): void {
        $this->ListaNumerica = new ListaNumerica;
    }


    //somarElementos(array $lista): retorna a soma dos elementos presentes no array fornecido como parâmetro.

    public function testSomarElementos() {
        $resultado = $this->ListaNumerica->somarElementos([1, 2, 3, 4, 5]);

        $this->assertEquals(15, $resultado);
    }

    public function testSomarElementosComListaVazia() {
        $resultado = $this->ListaNumerica->somarElementos([]);

        $this->assertEquals(0, $resultado);
    }

    public function testSomarElementosComNumerosNegativos() {
        $resultado = $this->ListaNumerica->somarElementos([-1, -2, -3, -4, -5]);

        $this->assertEquals(-15, $resultado);
    }

    public function testSomarElementosComZeros() {
        $resultado = $this->ListaNumerica->somarElementos([0, 0, 0, 0, 0]);

        $this->assertEquals(0, $resultado);
    }

    public function testSomarElementosComListaVariada() {
        $resultado = $this->ListaNumerica->somarElementos([-1, 3, -7, 0, 2]);

        $this->assertEquals(-3, $resultado);
    }



    //encontrarMaiorElemento(array $lista): retorna o maior valor presente no array fornecido como parâmetro.

    public function testEcontrarMaiorElemento() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([43, 23, 65, 34, 12]);

        $this->assertEquals(65, $resultado);
    }

    public function testEcontrarMaiorElementoComListaVazia() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([]);

        $this->assertEquals(0, $resultado);
    }

    public function testEcontrarMaiorElementoComNumerosNegativos() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([-43, -23, -65, -34, -12]);

        $this->assertEquals(-12, $resultado);
    }

    public function testEcontrarMaiorElementoComZeros() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([0, 0, 0, 0, 0]);

        $this->assertEquals(0, $resultado);
    }

    public function testEcontrarMaiorElementoComListaVariada() {
        $resultado = $this->ListaNumerica->encontrarMaiorElemento([13, -43, 0, 2, -5]);

        $this->assertEquals(13, $resultado);
    }


    //encontrarMenorElemento(array $lista): retorna o menor valor presente no array fornecido como parâmetro.

    public function testEcontrarMenorElemento() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([32, 54, 23, 87, 54]);

        $this->assertEquals(23, $resultado);
    }

    public function testEcontrarMenorElementoComListaVazia() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([]);

        $this->assertEquals(null, $resultado);
    }

    public function testEcontrarMenorElementoComNumerosNegativos() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([-21, -43, -22, -76, -65]);

        $this->assertEquals(-76, $resultado);
    }

    public function testEcontrarMenorElementoComZeros() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([0, 0, 0, 0, 0]);

        $this->assertEquals(0, $resultado);
    }

    public function testEcontrarMenorElementoComListaVariada() {
        $resultado = $this->ListaNumerica->encontrarMenorElemento([21, -43, 1, 0, -8]);

        $this->assertEquals(-43, $resultado);
    }


    //ordenarLista(array $lista): aceita um array como parâmetro e retorna uma cópia desse array ordenada em ordem crescente

    public function testOrdenarLista() {
        $resultado = $this->ListaNumerica->ordernarLista([4, 3, 8, 2, 7]);

        $this->assertEquals([2, 3, 4, 7, 8], $resultado);
    }

    public function testOrdenarListaComListaVazia() {
        $resultado = $this->ListaNumerica->ordernarLista([]);

        $this->assertEquals([], $resultado);
    }

    public function testOrdenarListaComNumerosNegativos() {
        $resultado = $this->ListaNumerica->ordernarLista([-4, -3, -6, -12, -34]);

        $this->assertEquals([-34, -12, -6, -4, -3], $resultado);
    }

    public function testOrdenarListaComZeros() {
        $resultado = $this->ListaNumerica->ordernarLista([0, 0, 0, 0, 0]);

        $this->assertEquals([0, 0, 0, 0, 0], $resultado);
    }

    public function testOrdenarListaVariada() {
        $resultado = $this->ListaNumerica->ordernarLista([-23, 0, 12, -3, 65]);

        $this->assertEquals([-23, -3, 0, 12, 65], $resultado);
    }

    public function testOrdenarListaElementosDuplicados() {
        $resultado = $this->ListaNumerica->ordernarLista([-28, 43, 8, -28, 6]);

        $this->assertEquals([-28, -28, 6, 8, 43], $resultado);
    }


    //filtrarNumerosPares(array $lista): retorna um array apenas com os números pares presentes no array fornecido como parâmetro

    public function testFiltrarNumerosPares() {
        $resultado = $this->ListaNumerica->filtrarNumerosPares([1, 24, 55, 32, 8]);

        $this->assertEquals([24, 32, 8], $resultado);
    }

    public function testFiltrarNumerosParesComListaVazia() {
        $resultado = $this->ListaNumerica->filtrarNumerosPares([]);

        $this->assertEquals([], $resultado);
    }

    public function testFiltrarNumerosParesComNumerosNegativos() {
        $resultado = $this->ListaNumerica->filtrarNumerosPares([-2, -6, -3, -1, -8]);

        $this->assertEquals([-2, -6, -8], $resultado);
    }

    public function testFiltrarNumerosParesComZeros() {
        $resultado = $this->ListaNumerica->filtrarNumerosPares([0, 0, 0, 0, 0]);

        $this->assertEquals([0, 0, 0, 0, 0], $resultado);
    }

    public function testFiltrarNumerosParesListaVariada() {
        $resultado = $this->ListaNumerica->filtrarNumerosPares([-23, 0, 12, -3, 65]);

        $this->assertEquals([0, 12], $resultado);
    }


}




?>