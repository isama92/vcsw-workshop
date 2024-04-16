<?php

namespace App\Http\Integrations;

use Saloon\Enums\Method;
use Saloon\Http\SoloRequest;

class GetAllPokemonRequest extends SoloRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return 'https://pokeapi.co/api/v2/pokemon';
    }
}
