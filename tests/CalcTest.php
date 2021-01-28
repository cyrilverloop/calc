<?php

declare(strict_types=1);

namespace CyrilVerloop\Calc\Tests;

use CyrilVerloop\Calc\Calc;
use PHPUnit\Framework\TestCase;

/**
 * Test the calculator.
 * @package \CyrilVerloop\Calc\Tests
 *
 * @coversDefaultClass \CyrilVerloop\Calc\Calc
 */
class CalcTest extends TestCase
{
    // Properties :

    /**
     * @var \CyrilVerloop\Calc\Calc the test subject.
     */
    protected Calc $calc;


    // Methods :

    /**
     * Initialises tests.
     * @return void
     */
    public function setUp(): void
    {
        $this->calc = new Calc();
    }


    /**
     * Test that two numbers can be added.
     * @return void
     *
     * @covers ::add
     */
    public function testCanAdd(): void
    {
        self::assertSame(2, $this->calc->add(1, 1), 'The addition of the two numbers must be 2.');
    }
}
