<?php

use PHPUnit\Framework\TestCase;
use App\Areas;

class AreasTest extends TestCase
{
    public function testAreaCuadrado()
    {
        $lado = 4;
        $resultado = Areas::calcularAreas($lado, 0, 0);
        $this->assertEquals(16, $resultado['cuadrado'], 'El área del cuadrado es incorrecta');
    }

    public function testAreaTriangulo()
    {
        $base = 10;
        $altura = 5;
        $resultado = Areas::calcularAreas(0, $base, $altura);
        $this->assertEquals(25, $resultado['triangulo'], 'El área del triángulo es incorrecta');
    }
} 
