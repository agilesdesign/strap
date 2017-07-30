<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class WordsTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('Laravel Rocks!')->words());
    }

    public function test_is_operational()
    {
        $this->assertEquals('Laravel...', str('Laravel Rocks!')->words(1)->get());
    }
}
