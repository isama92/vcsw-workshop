<?php

use function Pest\Laravel\get;

it('renders the homepage', function (): void {
    $response = get('/');

    $response->assertStatus(200);

    $response->assertSee('Documentation');
});

it('renders the homepage and checks the snapshot', function (): void {
    $response = get('/');

    $response->assertStatus(200);

    expect($response)->toMatchSnapshot();
});

it('json encodes an array', function (): void {
    $data = [1, 2, 3, 4];

    $encoded = json_encode($data, JSON_THROW_ON_ERROR);

    expect($encoded)->toBeJson()
        ->and($encoded)->toBe('[1,2,3,4]')
        ->and($encoded)->toMatchSnapshot();
});
