<?php

use Illuminate\Support\Stringable;
use Ramsey\Collection\Exception\ValueExtractionException;

if (!function_exists('addition')) {
    function addition(Stringable $operation): string
    {
        $operating = $operation->split('/[\+]+/');
        $result = (int) $operating[0] + (int) $operating[1];

        return (string) $result;
    }
}

if (!function_exists('subtraction')) {
    function subtraction(Stringable $operation): string
    {
        $operating = $operation->split('/[\-]+/');
        $result = (int) $operating[0] - (int) $operating[1];

        return (string) $result;
    }
}

if (!function_exists('division')) {
    function division(Stringable $operation): string
    {
        $operating = $operation->split('/[\/]+/');
        $result = (int) $operating[0] / (int) $operating[1];

        return (string) $result;
    }
}

if (!function_exists('multiplication')) {
    function multiplication(Stringable $operation): string
    {
        $operating = $operation->split('/[\*]+/');
        $result = (int) $operating[0] * (int) $operating[1];

        return (string) $result;
    }
}
