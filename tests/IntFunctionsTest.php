<?php
declare(strict_types=1);

namespace Calmohallag\NullableCasting\Tests;

use PHPUnit\Framework\TestCase;

class IntFunctionsTest extends TestCase
{
    /**
     * @test
     */
    public function given_integerish_when_cast_to_nullable_int_return_int_value()
    {
        $this->assertSame(132, nullable_intval('132'));
    }

    /**
     * @test
     */
    public function given_null_value_when_cast_to_nullable_int_return_null()
    {
        $this->assertSame(null, nullable_intval(null));
    }

    /**
     * @test
     */
    public function given_empty_array_when_cast_to_nullable_int_return_null()
    {
        $this->assertSame(null, nullable_intval([]));
    }

    /**
     * @test
     */
    public function given_empty_string_when_cast_to_nullable_int_return_null()
    {
        $this->assertSame(null, nullable_intval(''));
    }

    /**
     * @test
     */
    public function given_integerish_0_value_when_cast_to_nullable_int_return_int_0_value()
    {
        $this->assertSame(0, nullable_intval('0'));
    }
}