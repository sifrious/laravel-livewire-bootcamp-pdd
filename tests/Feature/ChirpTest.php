<?php

use App\Models\Chirp;
use App\Models\User;

it('gives back an 302 response for the home page for a registered user', function () {

    $response = $this->get('/');

    $response->assertStatus(302);
});

it('gives back successful response for the home page for a registered user', function () {
    $user = User::factory()->create();
    $chirp = Chirp::factory()->create();

    $this->actingAs($user)
        ->get('/chirps')
        ->assertOk();
});
