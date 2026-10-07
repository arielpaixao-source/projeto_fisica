<?php

namespace App;

use Exception;

class Biofiltro
{

    public function calcularEficienciaRemocao(float $antes, float $depois): float
    {
  
        if ($antes < 0 || $depois < 0) {
            throw new Exception("Os valores do parametro nao podem ser negativos.");
        }


        if ($antes == 0.0) {
            return 0.0;
        }

        $reducao = $antes - $depois;
        $eficiencia = ($reducao / $antes) * 100;


        if ($eficiencia < 0) {
            return 0.0;
        }

        return round($eficiencia, 2);
    }
}