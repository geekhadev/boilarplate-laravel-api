<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;

uses()->group('auth/logout');

describe('logout', function () {
    uses(RefreshDatabase::class);

    it('Logout con token inválido', function () {
        $this->getJson('/api/logout')->assertStatus(401);
    });

    it('Logout con token válido', function () {
        Sanctum::actingAs(User::factory()->create());

        $this->getJson('/api/logout')->assertStatus(204);
    });
});
