<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class KebabTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesDesign')->kebab());
    }

    public function test_is_operational()
    {
        $this->assertEquals('agiles-design', str('agilesDesign')->kebab()->get());
    }
}
