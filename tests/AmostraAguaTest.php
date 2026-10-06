<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\AmostraAgua;

class AmostraAguaTest extends TestCase
{
    public function testAguaBoa()
    {
        $amostra = new AmostraAgua(7.0, 1.0, 1.5);
        $this->assertTrue($amostra->estaApropriada());
    }

    public function testAguaRuim()
    {
        $amostra = new AmostraAgua(4.0, 10.0, 0.0);
        $this->assertFalse($amostra->estaApropriada());
    }
}