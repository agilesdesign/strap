<?php

use Orchestra\Testbench\TestCase;
use Strap\Str;

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
