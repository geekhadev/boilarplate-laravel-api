<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;

uses()->group('tracking/devices');

describe('devices/store', function () {
    uses(RefreshDatabase::class);

    it('Estado 401 si no se envía el token', function () {
        $response = $this->postJson('/api/tracking/devices', [
            'name' => 'Device 1',
        ]);

        $response->assertStatus(401);
    });

    it('Crear un nuevo registro', function () {
        Sanctum::actingAs(User::factory()->create());

        $response = $this->postJson('/api/tracking/devices', [
            'name' => 'Device 1',
        ]);

        $response->assertStatus(201);
    });

    it('Estado 422 si no se envían los datos requeridos', function () {
        Sanctum::actingAs(User::factory()->create());

        $response = $this->postJson('/api/tracking/devices', []);

        $response->assertStatus(422);
    });
});
