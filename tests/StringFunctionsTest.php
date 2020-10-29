<?php
declare(strict_types=1);

namespace Calmohallag\NullableCasting\Tests;

use PHPUnit\Framework\TestCase;

class StringFunctionsTest extends TestCase
{
    /**
     * @test
     */
    public function given_int_when_cast_to_nullable_string_return_integerish_string_value()
    {
        $this->assertSame('132', nullable_strval(132));
    }

    /**
     * @test
     */
    public function given_null_value_when_cast_to_nullable_string_return_null()
    {
        $this->assertSame(null, nullable_strval(null));
    }

    /**
     * @test
     */
    public function given_empty_array_when_cast_to_nullable_string_return_null()
    {
        $this->assertSame(null, nullable_strval([]));
    }

    /**
     * @test
     */
    public function given_empty_string_when_cast_to_nullable_string_return_empty_string()
    {
        $this->assertSame('', nullable_strval(''));
    }
}