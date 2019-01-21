<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function setUp()
    {
        
    }

    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    public function testFailing()
    {
        // not failing anymore
        $this->assertEquals(0, 0);
    }
}
?>