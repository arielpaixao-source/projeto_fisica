<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\AmostraAgua;
use Exception;

class AmostraAguaTest extends TestCase
{

    public function testAguaBoa()
    {
        $amostra = new AmostraAgua(7.0, 1.0, 1.5);
        $this->assertTrue($amostra->estaApropriada());
    }

 
    public function testLimitesExatosDePotabilidade()
    {
        
        $amostraMin = new AmostraAgua(6.0, 5.0, 0.2);
        $amostraMax = new AmostraAgua(9.5, 0.0, 5.0);

        $this->assertTrue($amostraMin->estaApropriada());
        $this->assertTrue($amostraMax->estaApropriada());
    }

    public function testPhImpossivelDisparaExcecao()
    {
        $this->expectException(Exception::class);
        new AmostraAgua(15.0, 1.0, 1.0);
    }
}