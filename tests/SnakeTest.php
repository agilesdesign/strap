<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class SnakeTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesDesign')->snake());
    }

    public function test_is_operational()
    {
        $this->assertEquals('agiles_design', str('agilesDesign')->snake()->get());
    }
}
