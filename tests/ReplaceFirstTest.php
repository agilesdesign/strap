<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class ReplaceFirstTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('Laravel Rocks!')->replaceFirst('Laravel', 'agilesdesign'));
    }

    public function test_is_operational()
    {
        $this->assertEquals('agilesdesign Rocks!', str('Laravel Rocks!')->replaceFirst('Laravel', 'agilesdesign')->get());
    }
}
