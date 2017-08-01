<?php

use Orchestra\Testbench\TestCase;

class FluentTest extends TestCase
{
    public function test_chaining_methods_that_operate_on_the_string()
    {
        $string = str('agiles')->singular()->plural()->finish('design')->ucfirst()->camel()->kebab()->snake()->studly()->title()->upper()->lower();

        $this->assertEquals('agilesdesign', $string);
    }
}
