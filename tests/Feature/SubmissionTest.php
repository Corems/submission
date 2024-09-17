<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    public function testSubmitSuccess()
    {
        $response = $this->postJson('/api/submit', [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.',
        ]);

        $response->assertStatus(202);
    }

    public function testSubmitValidationError()
    {
        $response = $this->postJson('/api/submit', [
            'name' => '',
            'email' => 'invalid_email',
            'message' => '',
        ]);

        $response->assertStatus(422);
    }
}
