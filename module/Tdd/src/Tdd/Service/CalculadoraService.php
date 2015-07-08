<?php

Namespace Tdd\Service;

class CalculadoraService {

    public function suma($num1, $num2) {
        return $num1 * $num2;
    }

    public function resta($num1, $num2) {
        return $num1-$num2;
    }
    
    public function multiplicacion($num1, $num2) {
        return $num1*$num2;
    }
    
    public function division($num1, $num2) {
        return $num1/$num2;
    }

    public function operacion($numeros, $operacion) {
        if (count($numeros) < 1)
            return $numeros;

        foreach ($numeros as $key => $numero) {
            $rpta = ($key == 0) ? $numero : $this->{$operacion}($rpta,$numero);
        }

        return $rpta;
    }

}
