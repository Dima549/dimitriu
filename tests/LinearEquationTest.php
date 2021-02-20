<?php
use dimitriu\LinearEquation;
use dimitriu\DimitriuException;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class LinearEquationTest extends TestCase {
    /**
     * @dataProvider providerLinearEquation
     */

    public function testLinearEquation($a, $b, $res) {
        $fTest = new LinearEquation();
        $this->assertEquals($res, $fTest->LinearEquation($a, $b));
    }

    public function providerLinearEquation ()
    {
        return array (
            array (3, 3, [-1]),
            array (-4, 8, [2]),
            array (550, 55, [-0.1]),
        );
    }

    /**
     * @dataProvider providerLinearEquationWithExc
     */

    public function testLinearEquationWithExc($a, $b, $res) {
        $this->expectException(DimitriuException::class);
        $fTest = new LinearEquation();
        $this->assertEquals($res, $fTest->LinearEquation($a, $b));
    }

    public function providerLinearEquationWithExc ()
    {
        return array (
            array (0, 0, 0, 0),
            array ('a', 'b', 'c',0),
            array (false, true, 1==0,0),
            array (null, null, null,0),

        );
    }

}