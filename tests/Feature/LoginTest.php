<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $payload = [
            "account" => "test",
            "password" => "123456",
        ];
        $response = $this->postJson('/auth-example/login', $payload);
        $response->assertJsonStructure(['status', 'message']);
    }
}
