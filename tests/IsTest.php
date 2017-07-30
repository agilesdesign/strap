<?php

use Strap\Str;
use Orchestra\Testbench\TestCase;

class IsTest extends TestCase
{
    public function test_is_boolean()
    {
        $this->assertInternalType('boolean', str('agilesdesign')->is('agiles*'));
    }

    public function test_is_operational()
    {
        $this->assertTrue(str('agilesdesign')->is('agi*es*'));

        $this->assertNotTrue(str('agilesdesign')->is('*test*'));
    }
}
