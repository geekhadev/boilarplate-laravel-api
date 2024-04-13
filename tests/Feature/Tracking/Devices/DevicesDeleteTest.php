<?php

namespace Tests\Feature\Auth;

use App\Models\Tracking\Device;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;

uses()->group('tracking/devices');

describe('devices/delete', function () {
    uses(RefreshDatabase::class);

    it('Estado 401 si no se envía el token', function () {
        $response = $this->deleteJson('/api/tracking/devices/1');

        $response->assertStatus(401);
    });

    it('Eliminar un registro', function () {
        Sanctum::actingAs(User::factory()->create());

        $device = Device::factory()->create();

        $response = $this->deleteJson('/api/tracking/devices/'.$device->id)->assertStatus(204);

        $response = $this->getJson('/api/tracking/devices/'.$device->id);
        expect($response->status())->toBe(404);
    });

    it('Estado 404 si el registro no existe', function () {
        Sanctum::actingAs(User::factory()->create());

        $this->deleteJson('/api/tracking/devices/'. 9999999)->assertStatus(404);
    });
});
