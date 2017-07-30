<?php

use Orchestra\Testbench\TestCase;
use Strap\Str;

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
