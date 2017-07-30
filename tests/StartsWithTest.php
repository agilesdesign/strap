<?php

use Orchestra\Testbench\TestCase;

class StartsWithTest extends TestCase
{
    public function test_is_boolean()
    {
        $this->assertInternalType('boolean', str('agilesdesign')->startsWith('agiles'));
    }

    public function test_is_operational()
    {
        $this->assertTrue(str('agilesdesign')->startsWith('agiles'));
        $this->assertTrue(str('agilesdesign')->startsWith(['agiles']));

        $this->assertNotTrue(str('agilesdesign')->startsWith('test'));
        $this->assertNotTrue(str('agilesdesign')->startsWith(['test']));
    }
}
