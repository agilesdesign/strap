<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class AsciiTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesdesign')->ascii());
    }
}
