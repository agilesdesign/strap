<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class LowerTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('AGILESDESIGN')->lower());
    }

    public function test_is_operational()
    {
        $this->assertEquals('agilesdesign', str('AGILESDESIGN')->lower()->get());
    }
}
