<?php

if (! function_exists('ensure')) {
    /**
     * @template TValue
     *
     * @param  class-string<TValue>  $class
     * @return TValue
     */
    function ensure(mixed $value, string $class): mixed
    {
        assert($value instanceof $class, 'Variable is not a ['.$class.'].');

        return $value;
    }
}
