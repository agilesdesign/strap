<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class StudlyTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('agilesdesign')->studly());
    }

    public function test_is_operational()
    {
        $this->assertEquals('LaravelHorizon', str('laravel_horizon')->studly()->get());

        $this->assertEquals('LaravelHorizon', str('laravel horizon')->studly()->get());
    }
}
