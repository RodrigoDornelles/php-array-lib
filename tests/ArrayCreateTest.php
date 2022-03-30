<?php 

use PHPUnit\Framework\TestCase;

/**
 * @covers \ArrayCreate
 */
class ArrayCreateTest extends TestCase
{

    public function testConstructorFrom()
    {
        $array = ArrayCreate::from([]);
        $this->assertInstanceOf(ArrayCreate::class, $array);
    }

    public function testFilter()
    {
        $expected = [1, 3, 5, 7, 9];
        $expected = array_combine($expected, $expected);
        $actual = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $actual = ArrayCreate::from($actual)
            ->filter(function($n){return $n % 2;})
            ->construct();
        
        $this->assertSame($expected, $actual);
    }

    public function testFirst()
    {
        $expected = 'first';
        $actual = ['first', 'last'];
        $actual = ArrayCreate::from($actual)
            ->first();
        
        $this->assertSame($expected, $actual);
    }

    public function testFlip()
    {
        $expected = ['bar' => 'foo'];
        $actual = ['foo' => 'bar'];
        $actual = ArrayCreate::from($actual)
            ->flip()
            ->construct();
        
        $this->assertSame($expected, $actual);
    }

    public function testJoin()
    {
        $expected = 'foo, bar, z';
        $actual = ['foo', 'bar', 'z'];
        $actual = ArrayCreate::from($actual)
            ->join(', ');

        $this->assertSame($expected, $actual);
    }

    public function testLast()
    {
        $expected = 'last';
        $actual = ['first', 'last'];
        $actual = ArrayCreate::from($actual)
            ->last();
        
        $this->assertSame($expected, $actual);
    }

    public function testMap()
    {
        $expected = [2, 4, 6, 8];
        $actual = [1, 2, 3, 4];
        $actual = ArrayCreate::from($actual)
            ->map(function($n){return $n * 2;})
            ->construct();
        
        $this->assertSame($expected, $actual);
    }
}