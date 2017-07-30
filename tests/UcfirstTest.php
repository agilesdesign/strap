<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class UcfirstTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesdesign')->ucfirst());
    }

    public function test_is_operational()
    {
        $this->assertEquals('Laravel', str('laravel')->ucfirst()->get());
    }
}
