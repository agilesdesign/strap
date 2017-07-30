<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class UpperTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesdesign')->upper());
    }

    public function test_is_operational()
    {
        $this->assertEquals('AGILESDESIGN', str('agilesdesign')->upper()->get());
    }
}
