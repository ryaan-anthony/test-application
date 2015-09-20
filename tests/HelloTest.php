<?php
class HelloTest extends PHPUnit_Framework_TestCase
{
    public function testHello()
    {
        $hello = new Test/Hello();
        $this->assertEquals('Hello World', $hello->getMessage());
    }
}
