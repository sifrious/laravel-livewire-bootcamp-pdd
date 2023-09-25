<?php

use App\Models\Chirp;
use App\Models\User;

it('gives back an 302 response for the home page for a guest user', function () {
    $this->get('/chirps')->assertRedirect();
});

it('gives back successful response for the home page for a registered user', function () {
    $user = User::factory()->create();
    $chirp = Chirp::factory()->create();

    $this->actingAs($user)
        ->get('/chirps')
        ->assertOk();
});
