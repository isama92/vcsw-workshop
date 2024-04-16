<?php

use App\Http\Integrations\GetAllPokemonRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

use function Pest\Laravel\getJson;

it('fetches and displays a list of Pokèmon', function (): void {
    Saloon::fake([
        GetAllPokemonRequest::class => MockResponse::make(body: [
            'results' => [
                ['name' => 'bulbasaur', 'url' => 'ttps://pokeapi.co/api/v2/pokemon/1/'],
                ['name' => 'ivysaur', 'url' => 'ttps://pokeapi.co/api/v2/pokemon/2/'],
            ],
        ]),
    ]);

    getJson('/pokemon')
        ->assertOk()
        ->assertJsonCount(2)
        ->assertSee('bulbasaur');
});


it('fetches and displays a list of Pokèmon using a Fixture', function() {
    Saloon::fake([
        GetAllPokemonRequest::class => MockResponse::fixture('pokemon/all'),
    ]);

    getJson('/pokemon')
        ->assertOk()
        ->assertJsonCount(20)
        ->assertSee('bulbasaur');
});
