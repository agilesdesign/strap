<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class EndsWithTest extends TestCase
{
    public function test_is_boolean()
    {
        $this->assertInternalType('boolean', str('agilesdesign')->endsWith('agiles'));
    }

    public function test_is_operational()
    {
        $this->assertTrue(str('agilesdesign')->endsWith('design'));
        $this->assertTrue(str('agilesdesign')->endsWith(['design']));

        $this->assertNotTrue(str('agilesdesign')->endsWith('test'));
        $this->assertNotTrue(str('agilesdesign')->endsWith(['test']));
    }
}
