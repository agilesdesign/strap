<?php

use Orchestra\Testbench\TestCase;
use Strap\Str;

class ContainsTest extends TestCase
{
    public function test_is_boolean()
    {
        $this->assertInternalType('boolean', str('agilesdesign')->contains('agiles'));
    }

    public function test_is_operational()
    {
        $this->assertTrue(str('agilesdesign')->contains('agiles'));
        $this->assertTrue(str('agilesdesign')->contains(['agiles']));

        $this->assertNotTrue(str('agilesdesign')->contains('test'));
        $this->assertNotTrue(str('agilesdesign')->contains(['test']));
    }
}
