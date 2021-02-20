<?php
use dimitriu\QuadraticEquation;
use dimitriu\DimitriuException;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class QuadraticEquationTest extends TestCase {

    /**
     * @dataProvider providerSolve
     */

    public function testSolve($a, $b, $c, $res) {
        $fTest = new QuadraticEquation();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }

    public function providerSolve ()
    {
        return array (
            array (15, 9, 0,[-0.6, 0]),
            array (1, 6, -40,[ -10, 4]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [-2]),
        );
    }

    /**
     * @dataProvider providerSolveEx
     */

    public function testSolveEx($a, $b, $c, $res) {
        $this->expectException(DimitriuException::class);
        $fTest = new QuadraticEquation();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }

    public function providerSolveEx (): array
    {
        return array (
            array (4, 2, 1, []),
            array (6, 3 , 2, []),
            array (0, 0, 0, []),
        );
    }
}