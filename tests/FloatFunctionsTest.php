<?php
declare(strict_types=1);

namespace Calmohallag\NullableCasting\Tests;

use PHPUnit\Framework\TestCase;

class FloatFunctionsTest extends TestCase
{
    /**
     * @test
     */
    public function given_numeric_when_cast_to_nullable_float_return_int_value()
    {
        $this->assertSame(132.1, nullable_floatval('132.1'));
    }

    /**
     * @test
     */
    public function given_null_value_when_cast_to_nullable_float_return_null()
    {
        $this->assertSame(null, nullable_floatval(null));
    }

    /**
     * @test
     */
    public function given_empty_array_when_cast_to_nullable_float_return_null()
    {
        $this->assertSame(null, nullable_floatval([]));
    }

    /**
     * @test
     */
    public function given_empty_string_when_cast_to_nullable_float_return_null()
    {
        $this->assertSame(null, nullable_floatval(''));
    }

    /**
     * @test
     */
    public function given_numeric_0_value_when_cast_to_nullable_float_return_int_0_value()
    {
        $this->assertSame(0.0, nullable_floatval('0.0'));
    }
}