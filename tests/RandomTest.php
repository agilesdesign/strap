<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class RandomTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str()->random());
    }

    public function test_is_operational()
    {
        $random = str()->random(4);
        $length = $random->length();

        $this->assertInternalType('int', $length);

        $this->assertEquals(4, $length);
    }
}
