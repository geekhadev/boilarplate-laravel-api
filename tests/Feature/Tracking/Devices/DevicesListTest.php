<?php

namespace Tests\Feature\Auth;

use App\Models\Tracking\Device;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;

uses()->group('tracking/devices');

describe('devices/list', function () {
    uses(RefreshDatabase::class);

    it('Estado 401 si no se envía el token', function () {
        $response = $this->getJson('/api/tracking/devices');

        $response->assertStatus(401);
    });

    it('10 registros por defecto', function () {
        Sanctum::actingAs(User::factory()->create());

        $response = $this->getJson('/api/tracking/devices')->assertStatus(200);
        expect($response['data'])->toHaveCount(10);
    });

    it('Buscar un registro por filtro search', function () {
        Sanctum::actingAs(User::factory()->create());

        $device = Device::factory()->create();

        $response = $this->getJson('/api/tracking/devices?search='.$device->name)->assertStatus(200);
        expect($response['data'])->toHaveCount(1);
    });

    it('Buscar un registro por filtro name', function () {
        Sanctum::actingAs(User::factory()->create());

        $device = Device::factory()->create();

        $response = $this->getJson('/api/tracking/devices?filters[name]='.$device->name)->assertStatus(200);
        expect($response['data'])->toHaveCount(1);
    });

    it('Ordenar por nombre', function () {
        Sanctum::actingAs(User::factory()->create());

        $device = Device::factory()->create(['name' => 'Aa']);

        $response = $this->getJson('/api/tracking/devices?orderBy=name&orderType=asc')->assertStatus(200);
        expect($response['data'][0]['name'])->toBe('Aa');

        $device = Device::factory()->create(['name' => 'Zz']);

        $response = $this->getJson('/api/tracking/devices?orderBy=name&orderType=desc')->assertStatus(200);
        expect($response['data'][0]['name'])->toBe('Zz');
    });
});
