<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class PluralTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('Framework')->plural());
    }

    public function test_is_operational()
    {
        $this->assertEquals('Frameworks', str('Framework')->plural(2)->get());

        $this->assertEquals('Wishes', str('Wish')->plural(2)->get());
    }
}
