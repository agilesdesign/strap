<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class SubstrTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('00agilesdesign')->substr(2));
    }

    public function test_is_operational()
    {
        $this->assertEquals('agilesdesign', str('00agilesdesign')->substr(2)->get());
    }
}
