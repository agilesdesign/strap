<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class CamelTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesdesign')->camel());
    }

    public function test_is_operational()
    {
        $this->assertEquals('agilesDesign', str('agiles_design')->camel()->get());

        $this->assertEquals('agilesDesign', str('agiles design')->camel()->get());
    }
}
