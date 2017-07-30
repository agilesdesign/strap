<?php

use Orchestra\Testbench\TestCase;
use Strap\Str;

class FinishTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agiles')->finish('design'));
    }

    public function test_is_operational()
    {
        $this->assertEquals('agilesdesign', str('agiles')->finish('design')->get());
    }
}
