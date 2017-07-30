<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class SingularTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('Framework')->singular());
    }

    public function test_is_operational()
    {
        $this->assertEquals('Framework', str('Frameworks')->singular()->get());

        $this->assertEquals('Wish', str('Wishes')->singular()->get());
    }
}
