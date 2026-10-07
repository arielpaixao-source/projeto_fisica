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

    /**
     * @dataProvider provedorDadosBiofiltro
     */

    public function testCalculoEficiencia($bruto, $filtrado, $esperado)
    {
        $eficiencia = ($bruto - $filtrado) / $bruto * 100;
        $this->assertEqualsWithDelta($esperado, $eficiencia, 0.01);
        $this->assertIsFloat($eficiencia);
        $this->assertGreaterThanOrEqual(0, $eficiencia);
    }

    public function provedorDadosBiofiltro()
    {
        $casos = [];
   
        for ($i = 1; $i <= 30; $i++) {
            $bruto = 100 + $i;
            $filtrado = 10 + $i;
            $esperado = (($bruto - $filtrado) / $bruto) * 100;
            $casos["Cenario $i"] = [$bruto, $filtrado, $esperado];
        }
        return $casos;
    }
}