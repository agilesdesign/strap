<?php

use Orchestra\Testbench\TestCase;
use Strap\Str;

class AsciiTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesdesign')->ascii());
    }
}
