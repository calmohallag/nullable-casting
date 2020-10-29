<?php
declare(strict_types=1);

function nullable_intval($value, int $base = 10): ?int
{
    return null === $value || '' === $value || [] === $value
        ? null
        : \intval($value, $base);
}

function nullable_strval($value): ?string
{
    return null === $value || [] === $value
        ? null
        : (string) $value;
}

function nullable_floatval($value): ?float
{
    return null === $value || '' === $value || [] === $value
        ? null
        : (float) $value;
}