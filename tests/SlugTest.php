<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class SlugTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('Laravel 5.5 Rocks!')->slug());
    }

    public function test_is_operational()
    {
        $this->assertEquals('laravel-55-rocks', str('Laravel 5.5 Rocks!')->slug()->get());
    }
}
