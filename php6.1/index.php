<?php
class Matematica
{
    public static string $nome = 'Gabriel';

    public static function somar($x, $y)
    {
        return $x + $y;
    }
}

echo Matematica::somar(20, 30);
echo Matematica::$nome;
