<?php

use Illuminate\Support\Facades\Redirect;

it('we have not left any debugging statements around', function (): void {
    expect(['dd', 'dump', 'ray'])
        ->not()
        ->toBeUsed();
});

arch('we have not left any debugging statements around 2')
    ->expect(['dd', 'dump', 'ray'])
    ->not()
    ->toBeUsed();

arch('controllers must be named consistently')
    ->expect('App\\Http\\Controllers\\')
    ->toHaveSuffix('Controller');

arch('controllers must not use the redirect facade')
    ->expect(Redirect::class)
    ->not->toBeUsedIn('App\\Http\\Controllers\\')
    ->and(['back', 'redirect'])
    ->toBeUsedIn('App\\Http\\Controllers\\');
