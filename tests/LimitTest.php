<?php

use Orchestra\Testbench\TestCase;
use Strap\Str;

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
