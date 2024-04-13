<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;

uses()->group('tracking/devices');

describe('devices/update', function () {
    uses(RefreshDatabase::class);

    it('Estado 401 si no se envía el token', function () {
        $response = $this->putJson('/api/tracking/devices/1', [
            'name' => 'Device 1',
        ]);

        $response->assertStatus(401);
    });

    it('Estado 405 si no se envía el id', function () {
        $response = $this->putJson('/api/tracking/devices', [
            'name' => 'Device 1',
        ]);

        $response->assertStatus(405);
    });

    it('Actualizar un registro', function () {
        Sanctum::actingAs(User::factory()->create());

        $response = $this->putJson('/api/tracking/devices/1', [
            'name' => 'Device 1',
        ]);

        $response->assertStatus(200);
    });

    it('Estado 404 si el registro no existe', function () {
        Sanctum::actingAs(User::factory()->create());

        $response = $this->putJson('/api/tracking/devices/99999999', [
            'name' => 'Device 1',
        ]);

        $response->assertStatus(404);
    });

    it('Estado 422 si no se envían los datos requeridos', function () {
        Sanctum::actingAs(User::factory()->create());

        $response = $this->putJson('/api/tracking/devices/1', []);

        $response->assertStatus(422);
    });
});
