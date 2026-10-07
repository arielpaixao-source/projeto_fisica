<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Biofiltro;
use Exception;

class BiofiltroTest extends TestCase
{

    public function testCalculoEficienciaRemocaoComSucesso()
    {
        $biofiltro = new Biofiltro();
        

        $eficiencia = $biofiltro->calcularEficienciaRemocao(10.0, 2.0);
        $this->assertEquals(80.0, $eficiencia);
    }


    public function testDivisaoPorZeroEmValorInicialZero()
    {
        $biofiltro = new Biofiltro();
        
        $eficiencia = $biofiltro->calcularEficienciaRemocao(0.0, 0.0);
        $this->assertEquals(0.0, $eficiencia);
    }


    public function testValorNegativoDisparaExcecao()
    {
        $this->expectException(Exception::class);

        $biofiltro = new Biofiltro();
        $biofiltro->calcularEficienciaRemocao(-5.0, 2.0);
    }
}