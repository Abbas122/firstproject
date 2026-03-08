<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class HelloTest extends TestCase
{
    public function testGreet()
    {
        $this->assertEquals("Hello, World!", greet("World"));
        $this->assertEquals("Hello, Abbas!", greet("Abbas"));
    }
}
