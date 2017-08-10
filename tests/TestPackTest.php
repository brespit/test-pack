<?php

use Brespit\TestPack\TestPack;

class TestPackTest extends PHPUnit_Framework_TestCase
{

    public function test_package_uppercase()
    {
        $txt = "Flavio";
        $test = new TestPack($txt);
        $this->assertSame('FLAVIO', $test->upperCase());
    }
}
