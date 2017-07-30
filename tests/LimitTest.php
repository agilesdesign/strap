<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class LimitTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesdesign')->limit(6));
    }

    public function test_is_operational()
    {
        $this->assertEquals('agiles...', str('agilesdesign')->limit(6)->get());

        $this->assertEquals('agilesdesign', str('agilesdesign')->limit(12)->get());
    }
}
