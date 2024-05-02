<?php

namespace App\Http\Controllers;

class Phpstan2ArrayShapesController extends Controller
{
    /**
     * @param  array<int|string, non-empty-string>  $names
     * @param  array{enabled?: bool, colour?: int<000000, 999999>, separator?: string}  $options
     */
    public function __invoke(array $names, array $options = []): string
    {
        return implode($options['separator'] ?? '', $names);
    }

    public static function run(): string
    {
        return (new self())(['Matthew', 'pm' => 'Jennifer'], ['separator' => ', ']);
    }
}
