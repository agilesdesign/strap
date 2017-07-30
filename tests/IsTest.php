<?php

use Orchestra\Testbench\TestCase;
use Strap\Str;

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
