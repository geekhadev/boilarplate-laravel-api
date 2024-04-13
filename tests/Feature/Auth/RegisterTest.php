<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses()->group('auth/register');

describe('register', function () {
    uses(RefreshDatabase::class);

    // Registro con datos válidos
    it('datos válidos', function () {

        $response = $this->postJson('/api/register', [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => 'password',
        ]);

        $response->assertStatus(201)
            ->assertJsonStructure(['token']);
    });

    // Registro con email duplicado
    it('email duplicado', function () {
        $user = User::factory()->create([
            'email' => 'john@doe.com',
        ]);

        $response = $this->postJson('/api/register', [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => 'password',
        ]);

        $response->assertStatus(422)
            ->assertJsonStructure(['errors']);
    });

    // Registro con datos vacíos
    it('datos vacíos', function () {
        $response = $this->postJson('/api/register', [
            'name' => '',
            'email' => '',
            'password' => '',
        ]);

        $response->assertStatus(422)
            ->assertJsonStructure(['errors']);
    });
});
