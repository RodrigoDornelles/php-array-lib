<?php 

use PHPUnit\Framework\TestCase;

/**
 * @covers \..\examples\readme-functional-libary
 * @covers \..\examples\readme-functional-native
 * @covers \..\examples\readme-structured
 */
class ExamplesTest extends TestCase
{
    public function testReadmeFunctionalLibary()
    {
        $expected = '6, 30, 84, 108';
        ob_start();
        require __DIR__.'/../examples/readme-functional-libary.php';
        $content = ob_get_contents();
        ob_end_clean();

        $this->assertSame($expected, $content);
    }

    public function testFunctionalNative()
    {
        $expected = '6, 30, 84, 108';
        ob_start();
        require __DIR__.'/../examples/readme-functional-native.php';
        $content = ob_get_contents();
        ob_end_clean();

        $this->assertSame($expected, $content);
    }

    public function testReadmeStructured()
    {
        $expected = '6, 30, 84, 108';
        ob_start();
        require __DIR__.'/../examples/readme-structured.php';
        $content = ob_get_contents();
        ob_end_clean();

        $this->assertSame($expected, $content);
    }
}