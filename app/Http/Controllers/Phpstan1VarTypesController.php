<?php

namespace App\Http\Controllers;

class Phpstan1Controller extends Controller
{
    /**
     * @param  non-empty-string  $name
     */
    public function __invoke(string $name): void
    {
        echo $name;
    }

    public static function run(): void
    {
        (new self())('non empty string');
    }
}
