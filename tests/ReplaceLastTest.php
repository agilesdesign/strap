<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class ReplaceLastTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('Laravel is bad')->replaceLast('bad', 'awesome!'));
    }

    public function test_is_operational()
    {
        $this->assertEquals('Laravel is awesome!', str('Laravel is bad')->replaceLast('bad', 'awesome!')->get());
    }
}
