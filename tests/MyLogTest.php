<?php
use dimitriu\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerEquation
     */

    public function testLog($str)
    {
        $this->assertEquals('',  MyLog::Instance()::log($str));
    }

    public function providerEquation ()
    {
        return array (
            array ("gncvncvn"),
            array ("cvncvn"),
            array (6334634),
            array (false),
        );
    }

    public function testLogTypeError()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  MyLog::Instance()::log(null));
        $this->assertEquals('',  MyLog::Instance()::log());
    }

    public function testWrite()
    {
        $this->assertEquals('',  MyLog::Instance()::write("asd"));
        $this->assertEquals('',  MyLog::Instance()::write());
    }
}