<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class ReplaceArrayTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('Laravel Laravel Rocks!')->replaceArray('Laravel', ['agilesdesign', 'also']));
    }

    public function test_is_operational()
    {
        $this->assertEquals('agilesdesign also Rocks!', str('Laravel Laravel Rocks!')->replaceArray('Laravel', ['agilesdesign', 'also'])->get());
    }
}
