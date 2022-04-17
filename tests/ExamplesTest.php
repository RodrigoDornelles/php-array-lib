<?php 

use PHPUnit\Framework\TestCase;

class ExamplesTest extends TestCase
{
    /**
     * @covers ::readmeFunctionalLibary
     * @covers ArrayCreate::__construct
     * @covers ArrayCreate::filter
     * @covers ArrayCreate::from
     * @covers ArrayCreate::join
     * @covers ArrayCreate::map
     * @covers ArrayCreate::sort
     */
    public function testReadmeFunctionalLibary()
    {
        $expected = '6, 30, 84, 108';
        ob_start();
        require __DIR__.'/../examples/readme-functional-libary.php';
        $content = ob_get_contents();
        ob_end_clean();

        $this->assertSame($expected, $content);
    }

    /**
     * @covers ::readmeFunctionalNative
     */
    public function testFunctionalNative()
    {
        $expected = '6, 30, 84, 108';
        ob_start();
        require __DIR__.'/../examples/readme-functional-native.php';
        $content = ob_get_contents();
        ob_end_clean();

        $this->assertSame($expected, $content);
    }

    /**
     * @covers ::readmeStructured
     */
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