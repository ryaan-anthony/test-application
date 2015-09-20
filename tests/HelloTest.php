<?php
use Tests\Hello;

class HelloTest extends PHPUnit_Framework_TestCase
{
    public function testHello()
    {
        $hello = new Hello();
        
        $hello->setMessage('Hello World');
        
        $this->assertEquals('Hello World', $hello->getMessage());
    }
}
