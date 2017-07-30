<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class LengthTest extends TestCase
{
    public function test_is_int()
    {
        $this->assertInternalType('int', str('agilesdesign')->length());
    }

    public function test_is_operational()
    {
        $this->assertEquals(12, str('agilesdesign')->length());
    }
}
