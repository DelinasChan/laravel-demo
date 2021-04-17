<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $payload = [
            "account" => "cornch",
            "name" => "海螺大神",
            "password" => \Hash::make("123456"),
            "email" => "sudo@drop.database",
        ];
        $response = $this->postJson('/auth-example/register', $payload);
        $response->assertJson([
            'status' => true,
        ]);

    }
}
