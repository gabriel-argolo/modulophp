<?php
class Calculadora
{
    private float $atual = 0;
    public float $valor;

    function add($valor)
    {
        return $this->atual = $this->atual + $valor;
    }
    function sub($valor)
    {
        return $this->atual = $this->atual - $valor;
    }
    function multiply($valor)
    {
        return $this->atual = $this->atual * $valor;
    }
    function divide($valor)
    {
        return $this->atual = $this->atual / $valor;
    }
    function total()
    {
        return $this->atual;
    }
    function clear()
    {
        $this->atual = 0;
    }
}
