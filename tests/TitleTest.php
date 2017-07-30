<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class TitleTest extends TestCase
{
    public function test_is_fluent()
    {
        $this->assertInstanceOf(Str::class, str('50 shades of laravel')->title());
    }

    public function test_is_operational()
    {
        $this->assertEquals('50 Shades Of Laravel', str('50 shades of laravel')->title()->get());
    }
}
