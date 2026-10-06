<?php

namespace App;

class AmostraAgua
{
    public float $ph;
    public float $turbidez;
    public float $cloro;

    public function __construct(float $ph, float $turbidez, float $cloro)
    {
        $this->ph = $ph;
        $this->turbidez = $turbidez;
        $this->cloro = $cloro;
    }

    public function phEstaBom(): bool
    {
        if ($this->ph >= 6.0 && $this->ph <= 9.5) {
            return true;
        }
        return false;
    }

    public function turbidezEstaBoa(): bool
    {
        if ($this->turbidez <= 5.0) {
            return true;
        }
        return false;
    }

    public function cloroEstaBom(): bool
    {
        if ($this->cloro >= 0.2 && $this->cloro <= 5.0) {
            return true;
        }
        return false;
    }

    public function estaApropriada(): bool
    {
        if ($this->phEstaBom() && $this->turbidezEstaBoa() && $this->cloroEstaBom()) {
            return true;
        }
        return false;
    }
}