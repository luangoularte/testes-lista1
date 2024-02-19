<?php 


class MinhaClasseAvancada {

    public function somar($a, $b) {

        if (!is_numeric($a) || !is_numeric($b)) {
            throw new InvalidArgumentException("Todos os argumentos devem ser numéricos");
        } else {
            $soma = round(($a + $b), 2);
            return $soma;
        }
    }

    public function subtrair($a, $b) {

        if (!is_numeric($a) || !is_numeric($b)) {
            throw new InvalidArgumentException("Todos os argumentos devem ser numéricos");
        } else {
            $sub = round(($a - $b), 2);
            return $sub;
        }
    }
}