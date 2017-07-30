<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class AfterTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesdesign')->after('agiles'));
    }

    public function test_is_operational()
    {
        $this->assertEquals('design', str('agilesdesign')->after('agiles')->get());
    }
}
