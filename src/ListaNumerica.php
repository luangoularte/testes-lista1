<?php 

class ListaNumerica {

    public function somarElementos(array $lista) {
        $soma = 0;

        foreach($lista as $num) {
            $soma += $num;
        }

        return $soma;
    }

    public function encontrarMaiorElemento(array $lista) {
        if ($lista != []){
            return max($lista);
        } else {
            return null;
        }
    }

    public function encontrarMenorElemento(array $lista) {
        if ($lista != []){
            return min($lista);
        } else {
            return null;
        }
    }

    public function ordernarLista(array $lista) {
        if ($lista != []){
            sort($lista);
            return $lista;
        } else {
            return [];
        }
    }

    public function filtrarNumerosPares(array $lista) {

        $pares = [];

        foreach ($lista as $num) {
            if ($num % 2 == 0) {
                $pares[] = $num; 
            }
        }

        return $pares;
    }


}





?>