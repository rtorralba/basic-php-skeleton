<?php

use App\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testCheckOk() {
        $main = new Main();
        $result = $main();
        $expectedResult = 'Hello world!';

        $this->assertEquals($expectedResult, $result);
    }
}
