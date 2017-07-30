<?php

use Orchestra\Testbench\TestCase;
use Strap\Str;

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
